<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\Score as ScoreEloquent;
class Student extends Model
{
    protected $table = 'student';

    //學生對應到一個成績 (a Student hasOne Score)
    public function score(){
        return $this->hasOne(ScoreEloquent::class);
    }
}
