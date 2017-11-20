<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Score;

use Route;
use View;
class BoardController extends Controller
{
    public function getIndex(){
        return view('board');
    }
}
