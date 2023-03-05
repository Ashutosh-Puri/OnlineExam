<?php

namespace App\Models;

use App\Models\Exam;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;
    protected $table="results";
    protected $fillable=[
        'user_id',
        'exam_id',
        'marks',
        'status'
    ];


    public function user()
    {  
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function exam()
    {  
        return $this->belongsTo(Exam::class,'exam_id','id');
    }
}
