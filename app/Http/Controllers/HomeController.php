<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Notifications\ContactRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blog::where('active', 1)->take(3)->get();
        $testimonials = Testimonial::where('active', 1)->get();
        return view('modules.home.index', compact('blogs','testimonials'));
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
