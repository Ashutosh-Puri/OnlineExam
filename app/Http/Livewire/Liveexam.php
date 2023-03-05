<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use App\Models\Result;
use Livewire\Component;
use App\Models\Question;
use App\Models\AssignExam;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Liveexam extends Component
{ 
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $finalresult=0; 
    public $eid;
    public $result=[];
    public $answer=[];
    public $tq=0; 
    public $aq=0;
    public $date="";
    public $time="";
    public $lefttime="";
    public $subject="";
    public $subject_id=0;
    public $attempt;
    public $curr_id;
    public $ename;
    
    public function submit()
    {   
        $sel =AssignExam::where('exam_id',$this->eid)->get('question_id');
        $ques = Question::where('status','0')->whereIn('id',$sel)->get(['id','answer']);
        foreach($ques as $q)
        {
            foreach($this->result as $key => $a)
            {
                if ($q->id==$key && $q->answer==$a)
                {
                    $this->finalresult++;     
                }   
            }  
        } 

        $request = [
            'user_id' => Auth::user()->id,
            'exam_id' => $this->eid,
            'marks' => $this->finalresult,
            'status' => 2,
        ];
        Result::create( $request);
        session()->flash('s-status','Exam Submited Successfully.');
        session(['mode' => '1']);
        
    }
    public function updatedanswer()
    {  
         foreach($this->answer as $key => $a)
        {
            if (array_key_exists($key, $this->result)) 
            {
                $this->result[$key] =$a;
            }
            else
            {
                $this->result[$key] =$a;
            }
            $this->aq=count($this->result);
        } 

        
    }
    public function decrement()
    {   
        $this->lefttime--;
        if($this->lefttime==0)
        {
            $this->submit();
        }
    }
    public function mount($exam_id)
    {   
        $this->eid = $exam_id;
        $exam=Exam::where('status','0')->where('id',$exam_id)->get();
        foreach($exam as $e)
        {
           $this->date=$e->date;
           $this->ename=$e->name;
           $this->time=gmdate("H:i:s",($e->time*60));
           $this->lefttime=($e->time*60);
           $this->subject=$e->subjects->name;
           $this->subject_id=$e->subjects_id;
        }
    }
    public function render()
    {   
      
        $selected =AssignExam::where('exam_id',$this->eid)->get('question_id');
        $questions = Question::where('status','0')->whereIn('id',$selected)->paginate(2);
        $this->tq = count( $selected);  
        return view('livewire.liveexam',['questions'=> $questions]);
    }
}
