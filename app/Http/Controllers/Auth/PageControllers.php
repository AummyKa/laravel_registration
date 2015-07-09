<?php

namespace App\Http\PageControllers;
use App\Model\Profile;

use App\Http\Controllers\Controller;

class PageControllers extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile()
    {
        $user = Profile::all();
        print_r($user);die();
        return view('profile')->with('user', $user);
    }

   
}