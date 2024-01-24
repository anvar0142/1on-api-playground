<?php

namespace App\Http\Controllers;

use App\Events\RealTimeMessage;

class PlaygroundController extends Controller
{
    function sendMessage() {
        event(new RealTimeMessage('test from loc'));
    }
}
