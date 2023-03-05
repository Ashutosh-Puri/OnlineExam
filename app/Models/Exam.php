<?php

namespace App\Models;

use App\Models\Subject;
use App\Models\AssignExam;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;
    protected $table="exams";
    protected $fillable=[
        'name',
        'subject_id',
        'date',
        'time',
        'attempt',
        'status',
    ];

    public function subjects()
    {
        
        return $this->belongsTo(Subject::class,'subject_id','id');
       
    }
    public function assignexam(){
        return $this->hasMany(AssignExam::class,'exam_id','id');
    }
}
