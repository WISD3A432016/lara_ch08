<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use View;
class BoardController extends Controller
{
    public function getIndex(){
        return view('board');
    }
}
