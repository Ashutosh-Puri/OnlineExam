<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignExam extends Model
{
    use HasFactory;
    protected $table="exam_assign";
    protected $fillable =[

        'exam_id',
        'question_id',
    ];

    public function subjects()
    {
        
        return $this->belongsTo(Subject::class,'subject_id','id');
       
    }

    public function exams()
    {
        
        return $this->belongsTo(Exam::class,'exam_id','id');
       
    }
   
    public function questions(){
        return $this->belongsTo(Question::class,'question_id','id');
    }
   

    public function assignexam(){
        return $this->hasMany(AssignExam::class,'exam_id','id');
    }
}
