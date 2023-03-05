<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::where('role','0')->paginate(10);
        return view('admin.students.view_student',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.students.create_student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user,Request $request)
    {
        $data =$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect()->route('users.index')->with('s-status','Student Created Successfully.');
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
    public function edit(User $user)
    {
        return view('admin.students.edit_student',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user,Request $request)
    {  
         
        $data =$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->role=$request->role==true?'1':'0';
        $user->update();

        return redirect()->route('users.index')->with('s-status','Student Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('s-status','Student Deleted Successfully.');
    }
}