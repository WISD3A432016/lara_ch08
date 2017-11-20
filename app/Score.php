<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\Student as StudentEloquent;
class Score extends Model
{
    protected $table = 'score';

    //成績屬於一位學生的 (a Score belongTo a Student)
    public function student(){
        return $this->belongsTo(StudentEloquent::class);
    }
}
