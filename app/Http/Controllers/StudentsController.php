<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function begin()
    {
        return view('begin');
    }

    public function enterGrades(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_3;
        $student_5 = $request->name_3;

        return view('grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAverageGrade($grade1, $grade2)
    {
        $average = ($score1 + $score2) /2;
        return round($average, 2);
    }

    public function computeGrades(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;

        $s1_average = $this->computeAverageGrade($request->s1_grade1, $request->s1_grade2);
        $s2_average = $this->computeAverageGrade($request->s2_grade1, $request->s2_grade2);
        $s3_average = $this->computeAverageGrade($request->s3_grade1, $request->s3_grade2);
        $s4_average = $this->computeAverageGrade($request->s4_grade1, $request->s4_grade2);
        $s5_average = $this->computeAverageGrade($request->s5_grade1, $request->s5_grade2);

        return view('grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // student 1 grades
            'p1_grade1' => $request->s1_grade1,
            'p1_grade2' => $request->s1_grade2,
            'p1_average' => $p1_average,
            // student 2 grades
            'p2_grade1' => $request->s2_grade1,
            'p2_grade2' => $request->s2_grade2,
            'p2_average' => $p2_average,
            // student 3 grades
            's3_grade1' => $request->s3_grade1,
            's3_grade2' => $request->s3_grade2,
            's3_average' => $s3_average,
             // student 4 grades
             's4_grade1' => $request->s4_grade1,
             's4_grade2' => $request->s4_grade2,
             's4_average' => $s4_average,
              // student 5 grades
            's5_grade1' => $request->s5_grade1,
            's5_grade2' => $request->s5_grade2,
            's5_average' => $s5_average,
        ]);
    }
}
