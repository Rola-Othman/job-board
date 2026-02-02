<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
   /**
    ** get an index page 
    * @return View
    */
   function index() {
       return view('index' , ['pageTitle' => 'Home Page']);
   }

   /**
    ** get an about page
    * @return View
    */
   function about(){
    return view('about', ['pageTitle' => 'About Us']);
   }

    /**
     ** get a contact page
     * @return View
     */
   function contact(){
    return view('contact', ['pageTitle' => 'Contact Us']);
   }
}
