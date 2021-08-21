<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Video;
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

    public function index()
    {

        $user = Auth::user();

        if ($user->is_admin == 1) {
            dd('Admin Here');

        } else {

            $videos = Video::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
            return view('home', compact('user', 'videos'));

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
