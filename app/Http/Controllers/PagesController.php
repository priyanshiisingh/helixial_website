<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('modules.about.index');
    }

    public function service(){
        return view('modules.services.index');
    }

    public function serviceDetail(){
        return view('modules.services.show');
    }

    public function alphaProfiling(){
        return view('modules.services.alphaProfiling');
    }

    public function dxn1(){
        return view('modules.services.dxn1');
    }

    public function cancerFind(){
        return view('modules.services.cancerFind');
    }
    public function cancerDetect(){
        return view('modules.services.cancerDetect');
    }

    public function blog(){
        $blogs = Blog::all();
        return view('modules.blogs.index', compact('blogs'));
    }

    public function blogDetail($slug){
        $blog = Blog::where('slug',$slug)->first();
        return view('modules.blogs.show', compact('blog'));
    }

    public function contact(){
        return view('modules.contact.index');
    }

    public function career(){
        return view('modules.career.index');
    }

    public function advisory(){
        return view('modules.advisory.index');
    }

    public function partners(){
        return view('modules.partners.index');
    }

    public function outreach(){
        return view('modules.outreach.index');
    }
}
