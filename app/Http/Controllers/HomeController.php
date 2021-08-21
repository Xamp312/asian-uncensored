<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Video;
use App\Models\Vote;
use Auth;

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

        $user = Auth::user();

        if($user->is_admin == 1){
            dd('Admin Here');

        }
        else{
            return view('pages.profile');

        }
     }



    public function landingPage()
    {

        return view('pages.home');
    }

    

}
