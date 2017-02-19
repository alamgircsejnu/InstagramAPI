<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use Vinkla\Instagram\Instagram;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function instagramFeed($user_id)
    {
      // $response     = Instagram::users()->getMedia();
      // $instagrams   =  json_encode($response->get($user_id));
 
      // // return view('in', compact('instagrams'));
      // return response($instagrams);
        $instagram = new Instagram();
        $data = $instagram->get($user_id);
        $profile = json_encode($data);
        return response($profile);
    }
}
