<?php

namespace App\Http\Controllers;

class VideoController extends Controller
{
    /**
     * Funtion to display the view for single Video
     *
     *
     * @param Type Integer videoId
     * @return view
     **/
    public function videoPage()
    {
        return view('pages.video');
    }

    /**
     * Funtion to display the view for upload Video
     *
     *
     * @param Type Integer videoId
     * @return view
     **/
    public function videoUploadPage()
    {
        return view('pages.uploadVideo');
    }

}
