<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoperasiController extends Controller
{
   public function daftar()
   {
    return view('pages.auth&regis.regis');
   }
   public function login()
   {
    return view('pages.auth&regis.login');
   }
}
