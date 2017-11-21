<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Student;

use View;

class StudentController extends Controller
{

    public function getStudentData($student_no){
        /*
        //練習四: 加入getStudentData及getStudentScore函數
        // return "學號: ".$student_no;
*/
        //ch07(練習三)-3修改StudentController的 getStudentData 方法，使之可傳入student_no或subject的資料
        return View::make('student', [
            'student_no' => $student_no,
            'subject' => null
        ]);

        $student=Student::where('no',$student_no)->firstOrFail();
        return View::make('student',[
           'student'=>$student,
            'user'=>$student->user,
            'score'=>$student->score,

            'subject'=>null
        ]);
    }
    public function getStudentScore($student_no, $subject = null){
        /*

       // return "學號：" . $student_no . "的" . ((is_null($subject)) ? "所有科目" : $subject) . "成績";

        //ch07(練習三)-3修改StudentController的 getStudentScore 方法，使之可傳入student_no或subject的資料
        return View::make('score', [
            'student_no' => $student_no,
            'subject' => $subject
        ]);
        */
        $student=Student::where('no',$student_no)->firstOrFail();
        return View::make('student',[
            'student'=>$student,
            'user'=>$student->user,
            'score'=>$student->score,
            'subject'=>$subject
        ]);
    }
}
