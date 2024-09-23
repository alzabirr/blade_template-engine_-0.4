<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{

    // home.blade.php page return
    function homePage(){
        return view ('page.home');
    }
    //  contact.blade.php page return
    function contactPage(){
        return view('page.contact');
    }

    // singin.blade.php page return
    function singinPage(){
        return view("page.singin");
    }

    // singup.blade.php page return
    function singupPage(){
        return view("page.singup");
    }

    // abour,blade.php page return
    function aboutPage(){
        return view("page.about");
    }






}
