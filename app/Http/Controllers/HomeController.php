<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Video;
use App\Models\Vote;
use Auth;
use App\Models\Category;

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


        $users = User::orderby('created_at', 'desc')->get();
        $videos = Video::orderby('created_at', 'desc')->get();
        $category = Category::all();

        
        return view('pages.home', compact('users', 'videos', 'category'));
    }

    

}
