<div>
    <?php session('mode') ?>
<div class="w-100 ">
@if (session('mode')==0)
<div class="exambar bg-custom px-2">
    <div class="row ">
       <div class="col-2 pb-2">
           Subject : {{ $subject}}
       </div>
       <div class="col-2 pb-2">
           Total Questions : {{ $tq }}
       </div>
       <div class="col-2 pb-2">
           Attempt Questions : {{ $aq }} / {{ $tq }}
       </div>
       <div class="col-2 pb-2">
           Date : {{ $date }}
       </div>
       <div class="col-2 pb-2">
           Time : {{ $time}} 
       </div>
       <div class="col-2 pb-2">
           <button hidden wire:poll.1000ms="decrement">+</button>
           Time Left : {{ gmdate("H:i:s",($lefttime)) }} 
       </div>
    </div>
   </div>
   <div class="row w-100 pt-4 px-5">
       @if (session('s-status'))
           <div class="alert   alert-success fw-bold" role="alert">
               {{ session('s-status') }}
           </div>
       @endif
       @if (session('d-status'))
           <div class="alert alert-danger   fw-bold" role="alert">
               {{ session('d-status') }}
           </div>
       @endif  
   </div>
       <?php $i=1; $j=0; ?>
   
       @foreach($questions as $q)
   
       
           <div class="card m-1">
               <div class="card-header  fw-bold bg-custom fw-bold  ">
                   <div class="row">
                       <div class="col-12 fs-4 ">
                           {{ "Q ".$i++." . "  }}  {{ $q->question }}
                       </div>
                   </div>
               </div>
               <div class="card-body bg-custom fs-5 fw-bold">
                   <div class="row">
                       <div   class="col-12 px-3 py-1 ">
                           
                           <label for="{{ ++$j  }}" class="w-100 hover rounded"> <input id="{{ $j }}" type="radio" value="1" class="fs-1 mx-1"  wire:model="answer.{{ $q->id }}" >{{ $q->option_a }}  </label>
                       </div>
                       <div  class="col-12 px-3 py-1 ">
                           <label for="{{ ++$j  }}" class="w-100 hover rounded"> <input id="{{ $j }}" type="radio" value="2" class="fs-1 mx-1"  wire:model="answer.{{ $q->id }}" >{{ $q->option_b }}  </label>
                       </div>
                       <div  class="col-12 px-3 py-1 ">
                           <label for="{{ ++$j  }}" class="w-100 hover rounded"> <input id="{{ $j }}" type="radio" value="3" class="fs-1 mx-1"  wire:model="answer.{{ $q->id }}" >{{ $q->option_c }}  </label>
                       </div>
                       <div  class="col-12 px-3 py-1 ">
                           <label for="{{ ++$j  }}" class="w-100 hover rounded"> <input id="{{ $j }}" type="radio" value="4" class="fs-1 mx-1"  wire:model="answer.{{ $q->id }}" >{{ $q->option_d }}  </label>
                       </div>
                       
                   </div>
               </div>   
           </div>        
       @endforeach
       
           <div class="card m-1">
               
               <div class="card-footer bg-custom  fw-bold">
                   <div class="row">
                       <div class="col-6">
                           {{ $questions->links() }} 
                       </div>
                       <div class="col-6">
                           <span class="btn btn-danger  fw-bold float-end"  wire:click="submit">Submit</span>
                       </div>
                   </div>
                  

                   

               </div>
           </div>
   </div>
@endif

@if (session('mode')==1)
   <div class=" card table-responsive bg-custom m-1">
        <div class="col-12 w-100 text-center text-white fw-bold">
           <span class=" display-4">Result </span> 
            <a id="logout" class="btn-danger btn mt-4 mx-5 btn-sm float-end" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
        <div class="col-12 p-2">
            <table class="  table 	table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Exam Name</th>
                        <th>Subject Name</th>
                        <th>Total Questions</th>
                        <th>Attempted Questions</th>
                        <th>Total Time</th>
                        <th>Marks</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr class="table-primary" >
                            <td scope="row">{{ Auth::user()->name }}</td>
                            <td>{{ Auth::user()->email }}</td>
                            <td>{{ $ename  }}</td>
                            <td>{{ $subject  }}</td>
                            <td>{{ $tq  }}</td>
                            <td>{{ $aq  }}</td>
                            <td>{{ $time }}</td>
                            <td>{{ $finalresult  }}</td>
                        </tr>
                    </tbody>
            </table>
        </div>

   </div>
   
@endif
    
</div>    
    @section('scripts')
        <script>
            document.querySelector('#footer').style.display="none";
            document.querySelector('#udashboard').style.display="none";
            document.querySelector('#onlineexam').style.display="none";
            function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
            $(document).bind("keydown", disableF5);
            $(document).on("keydown", disableF5);

            
var version = navigator.appVersion;

function showKeyCode(e) {
var keycode = (window.event) ? event.keyCode : e.keyCode;

if ((version.indexOf('MSIE') != -1)) {
if (keycode == 116) {
event.keyCode = 0;
event.returnValue = false;
return false;
}
}
else {
if (keycode == 116) {
return false;
}
}
}
function preventBack() {
        window.history.forward();
    }

    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null
    };


        </script>
    @endsection
    