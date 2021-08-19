<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    /**
     * Funtion to display the Home Page
     *
     *
     * @param no
     * @return view

     **/
    public function landingPage()
    {
        return view('pages.home');
    }
}
