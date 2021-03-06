<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Category;
use App\Models\Video;
use App\Models\Vote;
use App\Models\Rate;
use App\Models\User;

use Auth;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function upload(Request $request)
    {

        $video = new Video();
        $video->title = $request->video_title;
        $video->description = $request->description;
        $video->is_private = $request->is_private;

        $video->user_id = Auth::id();

        $category = Category::find($request->category_id);
        $category->count += 1;
        $category->save();

        $video->category_id = $category->id;

        $video->save();
        $slug = $video->slug;

        if($request->hasFile('image')){

            $image = $request->file('image');
            $filename = $slug. '.' . $image->getClientOriginalExtension();
            $image = Image::make($image);
            $image->resize(420, 240);

            $image->save('uploads/thumbnails/' . $filename);

            $video->image_name = $filename;

        }

        if($request->hasFile('video')){
            $video1 = $request->file('video');
            $filename = $slug. '.' . $video1->getClientOriginalExtension();
            $path = public_path('/uploads/videos');
            $video1->move($path, $filename);
            $video->video_name = $filename;

        }

//             php.ini files contains some limits that might affect this. Try changing these to high enough values:

// upload_max_filesize = 10M
// post_max_size = 10M
// memory_limit = 32M

        $video->save();

        return redirect()->back()->with([
            'success' => 'You video has been succesfully uploaded.',
        ]);

    }



    public function mostViewsVideos()
    {

        $videos = Video::orderby('views', 'desc')->paginate(16);
        $category = Category::all();

        return view('pages.mostViewsVideos', compact('videos', 'category'));
    }


    public function latestVideos()
    {

        $videos = Video::orderby('created_at', 'desc')->paginate(16);
        $category = Category::all();

        return view('pages.latestVideos', compact('videos', 'category'));
    }



    public function searchVideo(Request $request)
    {
    

        $videos = Video::where('title' , 'LIKE',  '%' . $request->q . '%')->orderBy('rating', 'desc')->take(50)->paginate(16);
        $category = Category::all();
        $q = $request->q; 

        return view('pages.search', compact('videos', 'category', 'q'));


    }


    public function topRated()
    {
        
        $videos = Video::orderBy('rating', 'desc')->take(50)->paginate(16);
        $category = Category::all();

        return view('pages.topRated', compact('videos', 'category'));


    }

    public function mostLiked()
    {
        
        $videos = Video::orderBy('likes', 'desc')->take(50)->paginate(16);
        $category = Category::all();

        return view('pages.mostLiked', compact('videos', 'category'));


    }

    public function categories($id)
    {
        $cat1 = Category::find($id);
        $videos = Video::where('category_id', $id)->orderBy('created_at', 'desc')->take(50)->paginate(16);
        $category = Category::all();

        return view('pages.categories', compact('videos', 'category', 'cat1'));


    }

    public function videoPage($slug)
    {


        $video = Video::where('slug', $slug)->first();


       
        $videos = Video::inRandomOrder()->limit(10)->get();


        if(Auth::check()){
            $user = User::find(Auth::id()); 
            $user->video_id = $video->id; 
            $user->save();
        }
        else {
            if($video->is_private == 1) {

                   if(!session()->has('url.intended'))
                {
                    session(['url.intended' => route('videoPage', $video->slug) ]);
                }


                return redirect()->route('login');
            
            }
   
        }












        $video->views += 1;
        $video->save();

        $video->likes = Vote::where('video_id', $video->id)
            ->where('react', '1')
            ->get();

        $video->dislikes = Vote::where('video_id', $video->id)
            ->where('react', '2')
            ->get();


        $usersOnVideo = User::where('video_id', $video->id)
                                ->get();

     if(Auth::check()){
        $rate = Rate::where('video_id', $video->id)
                        ->where('user_id', Auth::user()->id)
                                ->first();
        

        if($rate){
            $userRating = $rate->rate; 
        }
        else {
            $userRating = 0;
        }
    }
    else{
        $userRating = 0;

    }
       


        $usersOnVideoOnline = array();

        foreach($usersOnVideo as $uOV) {
            if($uOV->isOnline()){
                array_push($usersOnVideoOnline, $uOV);
            }
        }
        
        return view('pages.video')->with([
            'video' => $video,
            'usersOnVideoOnline' => $usersOnVideoOnline, 
            'videos' => $videos,
            'userRating' => $userRating
        ]);
    }

    public function videoReact(Request $request)
    {

        if(Auth::check()){

        $video = Video::find($request->videoId);
        $videoReact = Vote::where('video_id', $request->videoId)
            ->where('user_id', Auth::id());
            
        $newVote = new Vote();
        $newVote->video_id = $request->videoId;
        $newVote->user_id = Auth::id();
        if ($request->react == 1) {
            $newVote->react = 1;
                $video->likes += 1;
                $video->save();
        
           
        } else {
            if($videoReact){
                $video->likes -= 1;
                $video->save();
            }
            $newVote->react = 2;
        }
        $videoReact->delete();
        $newVote->save();
    }

    }


    public function videoRate(Request $request)
    {



        $videoRate = Rate::where('video_id', $request->videoId)
            ->where('user_id', Auth::id())->get();

            if($videoRate->isEmpty()){

                $newRate = new Rate();
                $newRate->video_id = $request->videoId;
                $newRate->user_id = Auth::id();
                $newRate->rate = $request->ratings;
                $newRate->save();



                $video = Video::find($request->videoId);
                $count = Rate::where('video_id' ,$video->id)->count();
                if($count < 1){
                    $count = 1;
                }
                    $total = $video->rating + $request->ratings;
                    $video->rating = $total / $count;
                    // $video->rating = round($rating, 0);
                    $video->save();
            }

                
          


    }



    public function videoUploadPage()
    {

        $category = Category::all();
        return view('pages.uploadVideo')->with([
            'category' => $category,
        ]);
    }

    public function editVideo($id)
    {

        $video = Video::find($id);
        $category = Category::all();
        $cat1 = Category::find($video->category_id);


        return view('pages.editVideo', compact('video','category', 'cat1'));

      
    }













    public function profile($slug){

        $user = User::where('slug', $slug)->first();

            if(Auth::user() == $user){
                return redirect()->route('home');
            }

            else{


            $videos = Video::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

                return view('pages.profile', compact('user', 'videos'));

                 
            }
    }

    


}
