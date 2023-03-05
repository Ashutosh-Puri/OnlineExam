<?php

namespace App\Models;

use App\Models\Answer;
use App\Models\Subject;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $table="questions";
    protected $fillable=[
        'subject_id',
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'answer',
        'status',
    ];



    public function subjects()
    {
        
        return $this->belongsTo(Subject::class,'subject_id','id');
       
    }

    // public function questions(){
    //     return $this->hasMany(Question::class,'question_id','id');
    // }

    // public function questions()
    // {
        
    //     return $this->belongsTo(Question::class,'question_id','id');
       
    // }

    
}
