<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

use Auth;

class AdminController extends Controller
{
    public function makeAdmin($slug){

        $user = User::where('slug',$slug)->first();

        $user->is_admin = 1;
        $user->save();

        return redirect()->back()->with('success', 'Admin Made Successfully');
    }

    public function removeAdmin($slug){


        if($slug == Auth::user()->slug){
            return redirect()->back()->with('warning', 'Cannot Remove yourself as Admin');
        }

        $user = User::where('slug',$slug)->first();

        $user->is_admin = 0;
        $user->save();

        return redirect()->back()->with('warning', 'Admin Removed Successfully');
    }

    public function deleteUser($slug){

        $user = User::where('slug',$slug)->first()->delete();

        return redirect()->back()->with('warning', 'User Deleted Successfully');
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

    public function createCat(Request $request){

        $cat = new Category();

        $cat->name = $request->name;
        $cat->save();

        return redirect()->route('home')->with('success', 'Category Added Successfully');
    }

    public function updateCat(Request $request){

        $cat = Category::find($reques->id);

        $cat->name = $request->name;

        $cat->save();

        return redirect()->route('home')->with('success', 'Category Updated Successfully');
    }
    public function users(){

        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users',compact('users'));
    }


}
