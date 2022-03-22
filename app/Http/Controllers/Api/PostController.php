<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return response()->json([
            'name' => 'mario',
            'surname' => 'rossi'
        ]);
    }
}
