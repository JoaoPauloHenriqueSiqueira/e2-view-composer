<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    //
    public function index()
    {
        # 1.1 Not using this variable anymore because I'm implementing on my provider (AppServiceProvider)
        //$channels = Channel::orderBy('name')->get();
        //return view('channel.index', ['channels' => $channels]);
        return view('channel.index');
    }
}
