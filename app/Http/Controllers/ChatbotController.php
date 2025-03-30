<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function ask(Request $request){
        return response()->json(["response"=>"Hola, ¿en que puedo ayudarte?"]);
    }
}
