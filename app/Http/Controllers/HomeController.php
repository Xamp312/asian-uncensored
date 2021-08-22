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

            $usersCount = User::all()->count();
            $videosCount = Video::all()->count();
            $categories = Category::orderBy('count', 'desc')->get();
            $catsCount = $categories->count();

            return view('admin.home', compact('usersCount', 'videosCount', 'catsCount', 'categories'));

        } else {

            $videos = Video::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
            return view('home', compact('user', 'videos'));

        }
    }



        public function landingPage()
                 {
        $users = User::orderby('created_at', 'desc')->get();

        $videos = Video::orderby('created_at', 'desc')->paginate(16);
        $category = Category::all();

        return view('pages.home', compact('users', 'videos', 'category'));
                 }


        public function updateUser(Request $reuest){

            $user = User::find($request->id);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->about = $request->about;
            $user->facebook = $request->facebook;
            $user->twitter = $request->twitter;
            $user->instagram = $request->instagram;

            $user->save();

            return redirect()->back()->with('success', 'Profile Updated Successfully');


        }
}
