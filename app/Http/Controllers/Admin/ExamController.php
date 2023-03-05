<?php

namespace App\Http\Controllers\Admin;


use App\Models\Exam;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ExamFormRequest;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $exams = Exam::paginate(10);
        return view('admin.exam.view_exam',compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $subjects= Subject::where('status','0')->get();
        return view('admin.exam.create_exam',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Exam $exam,ExamFormRequest $request)
    {
        $exam->name=$request['name'];
        $exam->subject_id=$request['subject_id'];
        $exam->date=$request['date'];
        $exam->time=$request['time'];
        $exam->attempt=$request['attempt'];
        $exam->status=$request->status==true?'1':'0';
        $exam->save();
        return redirect()->route('exam.index')->with('s-status','Exam Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {   
        $subjects= Subject::where('status','0')->get();
        return view('admin.exam.edit_exam',compact('exam','subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Exam $exam,ExamFormRequest $request)
    {
        $exam->name=$request['name'];
        $exam->subject_id=$request['subject_id'];
        $exam->date=$request['date'];
        $exam->time=$request['time'];
        $exam->attempt=$request['attempt'];
        $exam->status=$request->status==true?'1':'0';
        $exam->update();
        return redirect()->route('exam.index')->with('s-status','Exam Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('exam.index')->with('s-status','Exam Deleted Successfully.');
    }

    public function assign(Exam $exam)
    {   
        $subjects= Subject::where('status','0')->get();
        return view('admin.exam.edit_exam',compact('exam','subjects'));
    }
}
