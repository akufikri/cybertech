<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gettingStarted()
    {
        return view("page.getting-started");
    }
    public function apiAuth()
    {
        return view("page.docs.api-auth");
    }
    public function apiDivisi()
    {
        return view("page.docs.api-division");
    }
    public function apiMeeting()
    {
        return view("page.docs.api-meeting");
    }
    public function apiJoinMeeting()
    {
        return view("page.docs.api-join-meeting");
    }
    public function about()
    {
        return view('page.about-api');
    }
}
