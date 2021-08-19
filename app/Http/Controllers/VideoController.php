<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Video;
use App\Models\Like;

class VideoController extends Controller
{
    public function mostViewed(){
        $videos = Video::orderBy('views', 'desc')->get();

        return view('mostViewed', compact('videos'));

    }

    public function mostLiked(){
        $videos = Video::orderBy('likes', 'desc')->get();

        return view('mostLiked', compact('videos'));

    }
    
    public function latest(){

        $videos = Video::orderBy('created_at', 'desc')->get();

        return view('latest', compact('videos'));
    }

    public function topRated(){
            //
    }

    
}
