<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function create()
    {
        # 1.1 Not using this variable anymore because I'm implementing on my provider (AppServiceProvider)
        //$channels = Channel::orderBy('name')->get();
        //return view('post.create', ['channels' => $channels]);
        return view('post.create');
    }
}
