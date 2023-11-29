<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('pages.homepage');
    }

    public function aboutMeeting(){
        return view('pages.about.meeting');
    }
    public function aboutMembership(){
        return view('pages.about.membership');
    }
    public function aboutRightMember(){
        return view('pages.about.right-member');
    }
    public function aboutResponsibilityOfMember(){
        return view('pages.about.responsibility-of-member');
    }
}
