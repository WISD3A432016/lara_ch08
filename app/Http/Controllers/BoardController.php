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
        //return view('board');

        //課本寫法:
        //return View::make('board',['scores'=>Score::with('student')->OrderByTotal()->orderBySubject()->get()]);

        //由 DB 取得學生的國英數成績資料($scores)，且依成績高低排列(依總分排列，再依國英數)後，傳遞給 board 視圖呈現之
        $scores = Score::orderByTotal()->orderBySubject()->get();
        $data = ['scores'=>$scores];
        return view('board',$data);
    }
}
