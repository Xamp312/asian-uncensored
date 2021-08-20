<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Video;
use App\Models\Vote;

class HomeController extends Controller
{

    /**
     * Funtion to display the Home Page
     *
     *
     * @param no
     * @return view

     **/

     public function index(){

        dd('Logged in');
     }



    public function landingPage()
    {


        $users = User::orderby('created_at', 'desc')->get();
        $videos = Video::orderby('created_at', 'desc')->get();

        return view('pages.home', compact('users', 'videos'));
    }

    

}
