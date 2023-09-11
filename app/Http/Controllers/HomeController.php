<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function ourServices()
    {
        return view('our_services');
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function ourStaff()
    {
        return view('our_staff');
    }

    public function ourPartners()
    {
        return view('our_partners');
    }

    public function contact()
    {
        return view('contact');
    }
}
