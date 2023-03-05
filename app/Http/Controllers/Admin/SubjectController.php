<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SubjectFormRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $subjects = Subject::paginate(10);
        return view('admin.subject.view_subject',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subject.create_subject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Subject $subject,SubjectFormRequest $request)
    {
        $subject->name=$request['name'];
        $subject->code=$request['code'];
        $subject->status=$request->status==true?'1':'0';
        $subject->save();
        return  redirect()->route('subject.index')->with('s-status','Subject Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('admin.subject.edit_subject',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Subject $subject,SubjectFormRequest $request)
    {
        $subject->name=$request['name'];
        $subject->code=$request['code'];
        $subject->status=$request->status==true?'1':'0';
        $subject->update();
        return  redirect()->route('subject.index')->with('s-status','Subject Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return  redirect()->route('subject.index')->with('s-status','Subject Deleted Successfully.');
    }
}
