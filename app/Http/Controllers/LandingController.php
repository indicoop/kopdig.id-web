<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.landing_page.landing');
    }
    public function landingkoperasi()
    {
        return view('pages.landing_page.landingkoperasi');
    }
    public function landingsimpanpinjam()
    {
        return view('pages.landing_page.landingsimpanpinjam');
    }
    public function landingmarket()
    {
        return view('pages.landing_page.landingmarket');
    }
}
