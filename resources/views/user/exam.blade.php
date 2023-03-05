@extends('user.layout')
@section('user_content')
    @livewire('liveexam',['exam_id' => $exam_id])     
@endsection



   
