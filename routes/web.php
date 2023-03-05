<?php

use App\Http\Livewire\Exam;

use App\Http\Livewire\Starter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\User\ResultController;
use App\Http\Controllers\Admin\ResultsController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\AssignExamController;
use App\Http\Controllers\Admin\QuestionAnswerController;




Route::get('/',function(){
    return redirect('login');
});
Route::resource('subscriber',SubscriberController::class);

Auth::routes(['verify'=> true]);
Route::middleware(['auth','admin','verified'])->group( function () {
    Route::resources([
        
        'admin' => AdminController::class,
        'users' => UsersController::class,
        'subject' => SubjectController::class,
        'exam' => ExamController::class,
        'questionanswer' => QuestionAnswerController::class,
        'assignexam' => AssignExamController::class,
        'results' => ResultsController::class,

    ]);
 
});

Route::middleware(['auth','verified'])->group( function () {

    Route::resources([
        'user' => UserController::class,
        'result' => ResultController::class,
        
    ]);
});