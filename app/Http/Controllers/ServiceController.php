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

        $data = Service::latest('id')->paginate(15);

        return view('dashboard',compact('data'));
    }

    public function store(Request $request) {
        $data = $request->validated();
        
        $service = Service::latest('id')->paginate(15);

        Notification::send(User::get(), new NewOrder($service));

        return view('dashboard',compact('data'));
    }
}
