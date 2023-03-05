<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $subscribers= Subscriber::paginate(10);
        return view('view_subscriber',compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unsubscriber');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Subscriber $subscriber,Request $request)
    {   
        $data= $request->validate(['email'=>['required','email']]);
        $subscriber->email=$data['email'];
        $subscriber->save();
        return redirect()->back()->with('s-status','Welcome to Our Newsletter.');
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
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $subscriber)
    {
        $data= $request->validate(['email'=>['required','email']]);

        $sub = Subscriber::where('email',$data['email'])->delete();
        if($sub)
        {
            return redirect()->back()->with('s-status','Unsubscribed Successfully.');
        }
        else
        {
            return redirect()->back()->with('s-status','Not Subscribed Yet');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->back()->with('s-status','Unsubscribed Successfully.');
    }
}
