<?php

namespace App\Http\Controllers\Admin;


use App\Models\Subject;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\QuestionFormRequest;


class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $questionanswers=Question::orderBy('subject_id','asc')->paginate(10);
        return view('admin.questionanswer.view_questionanswer',compact('questionanswers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $subjects = Subject::where('status','0')->get();
        return view('admin.questionanswer.create_questionanswer',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Question $questionanswer ,QuestionFormRequest  $request)
    {   
        $questionanswer->subject_id=$request['subject_id'];
        $questionanswer->question=$request['question'];
        $questionanswer->option_a=$request['option_a'];
        $questionanswer->option_b=$request['option_b'];
        $questionanswer->option_c=$request['option_c'];
        $questionanswer->option_d=$request['option_d'];
        $questionanswer->answer=$request['answer'];
        $questionanswer->status=$request->status==true?'1':'0';
        $questionanswer->save();
        
        return redirect()->route('questionanswer.index')->with('s-status','Question Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $questionanswer)
    { 
        return view('admin.questionanswer.show_questionanswer',compact('questionanswer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $questionanswer)
    {
        $subjects = Subject::where('status','0')->get();
        return view('admin.questionanswer.edit_questionanswer',compact('subjects','questionanswer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Question $questionanswer ,QuestionFormRequest  $request)
    {
        $questionanswer->subject_id=$request['subject_id'];
        $questionanswer->question=$request['question'];
        $questionanswer->option_a=$request['option_a'];
        $questionanswer->option_b=$request['option_b'];
        $questionanswer->option_c=$request['option_c'];
        $questionanswer->option_d=$request['option_d'];
        $questionanswer->answer=$request['answer'];
        $questionanswer->status=$request->status==true?'1':'0';
        $questionanswer->update();
        
        return redirect()->route('questionanswer.index')->with('s-status','Question Updated Successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $questionanswer)
    {
        $questionanswer->delete();
        
        return redirect()->route('questionanswer.index')->with('s-status','Question Deleted Successfully.');
    }
}
