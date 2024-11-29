<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatriaDimarPutra_1462200179Controller extends Controller
{
   function home(){
    return view('home');
   }

   function hero(){
      return view('hero');
  }

  function aboutme(){
   return view('aboutme');
   }

   function index(){
      return view('index');
      }
}
