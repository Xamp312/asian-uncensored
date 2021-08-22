<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function makeAdmin($slug){

        $user = User::find($slug);

        $user->is_admin == 1;
        $user->save();

        return redirect()->back()->with('success', 'Admin made Successfully');
    }

    public function deleteVideo($slug){

        $video = Video::find($slug);
//delete video file here
        $video->delete();

        return redirect()->back()->with('warning', 'Video Deleted Successfully');
    }

    public function newCat(){
        return view('admin.newCat');
    }

    public function users(){

        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users',compact('users'));
    }


}
