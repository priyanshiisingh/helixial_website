<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\ContactRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index(){
        return view('modules.home.index');
    }

    public function contact(Request $request){
        $data = $request->all();
        try {
            Contact::create($data);
            // Send notification to admin
            Notification::route('mail', 'admin@example.com')
            ->notify(new ContactRequestNotification($data));

        } catch (\Throwable $th) {
           Log::error($th);
        }

        return redirect()->back();
    }
}
