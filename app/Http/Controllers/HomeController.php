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

            $videos = Video::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
            return view('pages.profile',compact('user', 'videos'));

        }
     }



    public function landingPage()
    {

        return view('pages.home');
    }

    

}
