<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatBotController extends Controller {

    public function sendChat(Request $request)
    {
        // return $request->input;
        if($request->input == 'Hi')
            return 'Hallo';
        else
            return 'Hi';
        // return 'Halo';
    }
}
