<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Auth; 


class Video extends Model
{
    use HasFactory;        use HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'video_name',
        'image_name',
        'title',
        'description',
        'is_private',
        'views'
    ];



    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }


    public function user(){

        return $this->belongsTo(User::class);
    }




    public function checkLike()
    {
        $uTR = Vote::where('user_id', Auth::id())
                                ->where('react', 1)
                                ->where('video_id', $this->id)
                                ->get();
        if($uTR->count() == 1){
            return true;
        }
        else {
            return false;
        }
    }



    public function checkDislike()
    {
        $uTR = Vote::where('user_id', Auth::id())
                                ->where('react', 2)
                                ->where('video_id', $this->id)
                                ->get();
        if($uTR->count() == 1){
            return true;
        }
        else {
            return false;
        }
    }



    public function isOwner(){


        if($this->user_id == Auth::id()){
            return true;
        }
        else {
            return false;
        }
    }



}


