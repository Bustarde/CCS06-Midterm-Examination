<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstFormController extends Controller
{
    public function enterStudentName(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

    }

    public function computeGrades($midterm, $final)
    {
        $average = ($midterm + $final)/2 
        return 
    }



}
