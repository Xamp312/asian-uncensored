<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Video;
use App\Models\Like;

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


        $users = User::orderby('created_at', 'desc')->get();
        $videos = Video::orderby('created_at', 'desc')->get();
        $likes = Like::all();

        return view('pages.home', compact('users', 'videos', 'likes'));
    }

    public function deleteVideo(Request $request){

        $video = Video::find($request->id);
//delete video file here
        $video->delete();
    }

}
