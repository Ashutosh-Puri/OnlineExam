<?php

namespace App\Http\Controllers\Admin;


use Countable;
use App\Models\Exam;
use App\Models\Question;
use App\Models\AssignExam;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AssignExamController extends Controller
{
    public function show(Exam $assignexam)
    {
        $exam_id=$assignexam->id;
        $selected =AssignExam::where('exam_id',$exam_id)->get('question_id');
       
        $questions = Question::where('status','0')->whereNotIn('id',$selected)->where('subject_id',$assignexam->subject_id)->get();
        return view('admin.exam.create_assignexam',compact('questions','exam_id'));
        
    }

    public function store(AssignExam $assignexam,Request $request)
    {   
        
        $data= $request->validate([
            'exam_id'=>['required'],
            'question_id'=>['required'],
        ]);

        foreach ($data['question_id'] as $q)
        {
            Exam::find($data['exam_id'])->assignexam()->create([
            'question_id'=>$q,
            ]);
        } 
        
       return redirect()->route('exam.index')->with('s-status','Exam Questions Assigend Successfully.');
    }
 


    public function edit(Exam $assignexam)
    {   
        $assignexams = AssignExam::where('exam_id',$assignexam->id)->paginate(10);
        return view('admin.exam.view_assignexam',compact('assignexams'));
    }

   
    
}
