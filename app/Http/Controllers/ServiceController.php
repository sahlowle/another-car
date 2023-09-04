<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use App\Notifications\NewOrder;
use App\Services\TapPaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ServiceController extends Controller
{
    public function paymentSuccess(Request $request) {

        if ($request->isNotFilled('tap_id')) {
            return view('payment-fail');
        }

        $payment_id = $request->tap_id;

        $response = TapPaymentService::getCharge($payment_id);

        // dd($response);
        
        if (isset($response->status) && $response->status == "CAPTURED"){
            $service = Service::where('payment_id',$payment_id)->first();
            $service->update(['is_paid' => true ]);
            $order_no = $service->order_no;
            return view('payment-success',compact('order_no'));
        }

        return view('payment-fail');

        
    }

    public function index(Request $request) {

        $data = Service::latest('id')->paginate(10);

        return view('dashboard',compact('data'));
    }

    public function filesPage($id) {
        auth()->user()->unreadNotifications->markAsRead();
        $files = Service::findOrFail($id)->files;
        return view('service-files',compact('files'));
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'seller_phone' => 'required',
            'buyer_phone' => 'required',
            'type' => 'required',
        ]);
        
        $service = Service::create($validated);

        $this->addFiles($service,$request->allFiles());
       

        Notification::send(User::get(), new NewOrder($service));

        $phone_number = ltrim($service->buyer_phone,'966') ;

        $body = [
            'amount'=> 300,
            'description'=> 'Transfer of car ownership',
            'first_name'=> 'Mohammed',
            'last_name'=> 'Abdelwahid',
            'email'=> 'ahmed@gmail.com',
            'country_code'=> 966,
            'phone_number'=> $phone_number,
        ];

        // return $body;

        $response  = TapPaymentService::charge($body);

        $payment_id = $response->id;

        $service->update(['payment_id' => $payment_id ]);

        return redirect($response->transaction->url);

        return view('success');
    }

    public function addFiles($service,$files) {
        foreach ($files as $key => $file) {
            $path = $this->uploadFile($file);

            $service->files()->create([
                'name' => $key,
                'path' => $path,
            ]);

        }
    }

    public function uploadFile($file) {
        $fileName = time().'.'.$file->extension();  
        $path = $file->move('uploads', $fileName);
        return $path;
    }
}
