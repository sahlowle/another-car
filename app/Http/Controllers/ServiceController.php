<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use App\Notifications\NewOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ServiceController extends Controller
{
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
            'files' => 'required',
        ]);

        
        $service = Service::create($validated);

        if ($request->hasFile('files')) {
           $this->addFiles($service,$request->file('files'));
        }

        Notification::send(User::get(), new NewOrder($service));

        return view('success');
    }

    public function addFiles($service,$files) {
        foreach ($files as $file) {
            $path = $this->uploadFile($file);
            $service->files()->create([ 'path' => $path]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'.'.$file->extension();  
        $path = $file->move('uploads', $fileName);
        return $path;
    }
}
