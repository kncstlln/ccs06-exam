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
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('grade', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAverageGrade($grade1, $grade2)
    {
        $average = ($grade1 + $grade2) /2;
        return round($average, 2);
    }
    protected function createRemarks($average){
        $remark;
        if($average>=75){
            $remark = "PASSED";
            return $remark;
        }
        else{
            $remark = "FAILED";
            return $remark;
        }
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

        $s1_remark = $this->createRemarks($s1_average);
        $s2_remark = $this->createRemarks($s2_average);
        $s3_remark = $this->createRemarks($s3_average);
        $s4_remark = $this->createRemarks($s4_average);
        $s5_remark = $this->createRemarks($s5_average);
        
        return view('average', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // student 1 grades
            's1_grade1' => $request->s1_grade1,
            's1_grade2' => $request->s1_grade2,
            's1_average' => $s1_average,
            's1_remark' => $s1_remark,
            // student 2 grades
            's2_grade1' => $request->s2_grade1,
            's2_grade2' => $request->s2_grade2,
            's2_average' => $s2_average,
            's2_remark' => $s2_remark,
            // student 3 grades
            's3_grade1' => $request->s3_grade1,
            's3_grade2' => $request->s3_grade2,
            's3_average' => $s3_average,
            's3_remark' => $s3_remark,
             // student 4 grades
            's4_grade1' => $request->s4_grade1,
            's4_grade2' => $request->s4_grade2,
            's4_average' => $s4_average,
            's4_remark' => $s4_remark,
             // student 5 grades
            's5_grade1' => $request->s5_grade1,
            's5_grade2' => $request->s5_grade2,
            's5_average' => $s5_average,
            's5_remark' => $s5_remark,
        ]);
    }
}
