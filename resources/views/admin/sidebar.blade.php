<div class="p-3 bg-custom min-vh-100 sidebar  " >
    <a href="{{ route('admin.show',1) }}" class=" text-center   link-primary text-decoration-none">
      <span class="fs-2 fw-bold"># ADMIN</span>
    </a>
    <hr>
    <div class="pb-2  ">
      <a href="{{ url('admin/1') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('admin/1')) ? 'active' : '' }} "><i class="fa fa-tachometer-alt mx-3"></i>Dashboard</a>
        <a href="{{ url('subject') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('subject')) ? 'active' : '' }} "><i class="fa fa-stream mx-3"></i>Subjects</a>
        <a href="{{ url('questionanswer') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('questionanswer')) ? 'active' : '' }}"><i class="fa fa-question mx-3"></i>Questions & Answers</a>
        <a href="{{ url('exam') }}" class="text-start btn w-100 m-1 btn-custom  {{ (request()->is('exam')) ? 'active' : '' }}"><i class="fas fa-tasks mx-3"></i>Exams</a> 
        <a href="{{ url('admin') }}" class="text-start btn w-100 m-1  btn-custom {{ (request()->is('admin')) ? 'active' : '' }}  "><i class="fas fa-user-friends mx-3"></i>Teachers</a>
        <a href="{{ url('users') }}" class="text-start btn w-100 m-1  btn-custom {{ (request()->is('users')) ? 'active' : '' }}"><i class="fas fa-user-graduate mx-3"></i>Students</a>
        <a href="{{ url('results') }}" class=" text-start btn w-100 m-1  btn-custom {{ (request()->is('results')) ? 'active' : '' }}"><i class="fas fa-award mx-3"></i>Results</a>
        <a href="{{ url('subscriber') }}" class=" text-start btn w-100 m-1  btn-custom {{ (request()->is('subscriber')) ? 'active' : '' }}"><i class="fa fa-users mx-3"></i>Subscribers</a>  
    </div>
</div>

