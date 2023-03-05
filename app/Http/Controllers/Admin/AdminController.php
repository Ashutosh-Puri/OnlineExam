<?php

namespace App\Http\Controllers\Admin;

use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function index()
    {  
       
        $admins= User::where('role','1')->paginate(10);
        return view('admin.admin.view_admin',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin.create_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $admin,Request $request)
    {
        $data =$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        $admin->name=$data['name'];
        $admin->email=$data['email'];
        $admin->password = Hash::make($data['password']);
        $admin->role=1;
        $admin->save();

        return redirect()->route('admin.index')->with('s-status','Teacher Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $admin)
    {   
        $exams=Exam::where('status','0')->paginate(10);
        return view('admin.admin.dashboard',compact('exams'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $admin)
    {
        return view('admin.admin.edit_admin',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $admin,Request $request)
    {  
         
        $data =$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
        ]);
        
        $admin->name=$data['name'];
        $admin->email=$data['email'];
        $admin->role=$request->role==true?'1':'0';
        $admin->update();

        return redirect()->route('admin.index')->with('s-status','Teacher Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index')->with('s-status','Teacher Deleted Successfully.');
    }
}

