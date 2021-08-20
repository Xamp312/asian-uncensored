<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function makeAdmin($id){

        $user = User::find($id);

        $user->is_admin == 1;
        $user->save();

        return redirect()->back()->with('success', 'Admin made Successfully');
    }

    public function deleteVideo($id){

        $video = Video::find($id);
//delete video file here
        $video->delete();

        return redirect()->back()->with('warning', 'Video Deleted Successfully');
    }



}
