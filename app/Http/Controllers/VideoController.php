<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Video;
use App\Models\Vote;

class VideoController extends Controller
{


    public function upload(Request $request){

        $video = new Video();
        $video->title = $request->title;
        $video->description = $request->description;
        if($request->is_private){
            $video->is_private = $request->is_private;
        }

        $video->save();


        if($request->hasFile('image')){
        
        
            $image = $request->file('image');
            $filename = $video->slug. '.' . $image->getClientOriginalExtension();    
            $image = Image::make($image);

            $image->save('uploads/thumbnails' . $filename);

            $video->image_name = $filename;

        }



        if(Request::hasFile('video')){

            $file = Request::file('video');
            $filename = $video->slug. '.' . $file->getClientOriginalExtension();
            $path = public_path().'/uploads/videos';
            return $file->move($path, $filename);
            
//             php.ini files contains some limits that might affect this. Try changing these to high enough values:

// upload_max_filesize = 10M
// post_max_size = 10M
// memory_limit = 32M
        }
        $video->video_name = $filename;
        $video->save();





    }

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
