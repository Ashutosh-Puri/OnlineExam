<?php

namespace App\Http\Controllers\User;

use App\Models\Exam;
use App\Models\Result;
use App\Models\Question;
use App\Models\AssignExam;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;



class UserController extends Controller
{  
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $exams=Exam::where('status','0')->where('date','>=',date('Y-m-d'))->orderBy('date','desc')->paginate(10);
        return view('user.dashboard',compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $user)
    {    
        $rat =Result::where('user_id',Auth::user()->id)->where('exam_id',$user->id)->count();
        $lat=$user->attempt-$rat;
        if($lat > 0 && ($user->date== date('Y-m-d')))
        {   
            
            return view('user.info',compact('user','lat'));
        }
        else
        {   
            $disable=1;
            return view('user.info',compact('user','disable','lat'))->with('d-status','No Attempt Left..!');
        }
        
      
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $user)
    {    
        $exam_id=$user->id;
        
        return view('user.exam',compact('exam_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
