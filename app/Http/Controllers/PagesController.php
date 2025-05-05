<?php

namespace App\Http\Controllers;

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
        return view('modules.blogs.index');
    }

    public function blogDetail(){
        return view('modules.blogs.show');
    }

    public function contact(){
        return view('modules.contact.index');
    }

    public function career(){
        return view('modules.career.index');
    }
}
