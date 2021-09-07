<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Ads;
use App\Models\AdsSettings;

use App\Models\Video;
use File;
use Image;

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



    public function deleteVideo($id){

        $video = Video::find($id);

        $cat = Category::find($video->category_id);
        $cat->count -+ 1;
        $cat->save();
        if(File::exists('uploads/videos' . $video->video_name)) {
            File::delete('uploads/videos' . $video->video_name);
        }
        if(File::exists('uploads/thumbnails' . $video->image_name)) {
            File::delete('uploads/thumbnails' . $video->image_name);
        }
        $video->delete();

        return redirect()->route('home')->with('warning', 'Video Deleted Successfully');
    }

    public function newCat(){
        return view('admin.newCat');
    }

    public function editCat($id){

        $cat = Category::find($id);

        return view('admin.editCat', compact('cat'));
    }
    public function createCat(Request $request){

        $cat = new Category();

        $cat->name = $request->name;
        $cat->save();

        return redirect()->route('home')->with('success', 'Category Added Successfully');
    }

    public function updateCat(Request $request){

        $cat = Category::find($request->id);

        $cat->name = $request->name;

        $cat->save();

        return redirect()->route('home')->with('success', 'Category Updated Successfully');
    }
    public function users(){

        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users',compact('users'));
    }

    public function videos(){

        $videos = Video::orderBy('created_at', 'desc')->get();
        return view('admin.videos',compact('videos'));
    }


    public function ads(){

        $ads = Ads::orderBy('created_at', 'desc')->get();
        return view('admin.ads',compact('ads'));
    }

    public function adSettings(){

        $adSettings = AdsSettings::orderBy('created_at', 'desc')->first();

        return view('admin.adSettings',compact('adSettings'));
    }

    public function updateAdSettings(Request $request){

        
        $adSettings = AdsSettings::find(1);
        $adSettings->popunder_script = $request->popunder; 
        $adSettings->verification_script = $request->verification; 
        $adSettings->save();


        $adSettings = AdsSettings::orderBy('created_at', 'desc')->first();

        return redirect()->route('adSettings')->with('success', 'Ad Settings Successfully Updated');
    }



    public function newAd(){


        return view('admin.newAd');
    }



    public function createAd(Request $request){

        $ad = new Ads;

        $ad->name = $request->name;
        $ad->script = $request->script;
        $ad->position = $request->position;
        $ad->place = $request->place;
        $ad->screen = $request->screen;


        $ad->save();

        return redirect()->route('ads')->with('success', 'Ad Created Successfully');
    }


    public function updateAd(Request $request){

        $ad = Ads::find($request->id);

        $ad->name = $request->name;
        $ad->script = $request->script;
        $ad->position = $request->position;
        $ad->place = $request->place;
        $ad->screen = $request->screen;


        $ad->save();

        return redirect()->route('ads')->with('success', 'Ad Edited Successfully');
    }



  public function editAd($id){

        $ad = Ads::find($id);

        return view('admin.editAd', compact('ad'));
    }
    

    public function deleteAd($id){

        $ad = Ads::find($id);



        $ad->delete();

        return redirect()->route('ads')->with('warning', 'Ad Deleted Successfully');
    }


    public function editVideo($id){

        $video = Video::find($id);
        $cat1 = Category::find($video->category_id);

        return view('admin.editVideo', compact('video', 'cat1'));
    }
    



    public function updateVideo(Request $request){

        $video = video::find($request->id);

        $video->title = $request->video_title;
        $video->description = $request->description;
        $video->is_private = $request->is_private;

        if($request->category_id == $video->category_id){

        }
        else{
            $cat = Category::find($request->category_id);
            $cat->count += 1;
            $cat->save();
            $cat = Category::find($video->category_id);
            $cat->count -= 1;
            $cat->save();
            $video->category_id = $request->category_id;
        }

        

        if($request->hasFile('image')){

                File::delete(public_path('/uploads/thumbnails/' . $video->image_name));
            

            $image = $request->file('image');
            $filename = $video->slug. '.' . $image->getClientOriginalExtension();
            $image = Image::make($image);
            $image->resize(420, 240);

            $image->save('uploads/thumbnails/' . $filename);

            $video->image_name = $filename;

        }

        $video->save();

        return redirect()->back()->with('success', 'Video Updated Successfully');

    }


}
