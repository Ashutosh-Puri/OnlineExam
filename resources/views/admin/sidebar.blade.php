<div class="p-3 bg-custom min-vh-100 sidebar  " >
    <a href="{{ route('admin.show',1) }}" class=" text-center   link-primary text-decoration-none">
      <span class="fs-2 fw-bold"># ADMIN</span>
    </a>
    <hr>
    <div class="pb-2  ">
       
        <a href="{{ url('subject') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('subject')) ? 'active' : '' }} "><i class="fa fa-stream mx-3"></i>Subjects</a>
        <a href="{{ url('exam') }}" class="text-start btn w-100 m-1 btn-custom  {{ (request()->is('exam')) ? 'active' : '' }}"><i class="fa fa-store mx-3"></i>Exams</a> 
        <a href="{{ url('questionanswer') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('questionanswer')) ? 'active' : '' }}"><i class="fa fa-flag mx-3"></i>Questions & Answers</a>
        <a href="{{ url('admin') }}" class="text-start btn w-100 m-1  btn-custom {{ (request()->is('admin')) ? 'active' : '' }}  "><i class="fas fa-tachometer-alt mx-3"></i>Teachers</a>
        <a href="{{ url('users') }}" class="text-start btn w-100 m-1  btn-custom {{ (request()->is('users')) ? 'active' : '' }}"><i class="fa fa-circle mx-3"></i>Students</a>
        <a href="{{ url('results') }}" class=" text-start btn w-100 m-1  btn-custom {{ (request()->is('result')) ? 'active' : '' }}"><i class="fa fa-circle mx-3"></i>Results</a>
        <a href="{{ url('subscriber') }}" class=" text-start btn w-100 m-1  btn-custom {{ (request()->is('subscribe')) ? 'active' : '' }}"><i class="fa fa-circle mx-3"></i>Subscribers</a>  
    </div>
</div>

