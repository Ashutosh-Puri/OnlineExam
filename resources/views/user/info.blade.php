<div>
    @extends('user.layout')
@section('user_content')
    <div class="row w-100 m-0">
        <div class="col-12 m-0 p-0">
            @if (session('s-status'))
                <div class="alert alert-success" role="alert">
                    {{ session('s-status') }}
                </div>
            @endif
            @if (session('d-status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('d-status') }}
                </div>
            @endif
            <div class="card m-2">
                <div class="card-header bg-custom fw-bold text-white">
                    Scheduled Exams
                    <a href="{{ route('user.index') }}" class="btn btn-custom float-end btn-sm fw-bold"   >Back</a>
                </div>
                <div class="card-body  table-responsive">
                    <table class="table table-sm table-striped table-bordered text-center table-inverse">
                        <thead class="thead-inverse">
                            
                                <div  class=" alert alert-danger text-danger fw-bold text-start" role="alert" >
                                    <div class="row">
                                        <div class=" col-12 col-md-6">
                                            
                                            <strong>Note :</strong> <br>
                                            1. During Exam Don't Switch Between Tabs. <br>
                                            2. Don't Refresh Page. <br>
                                            3. Each Question Carry 1 Mark. <br>
                                           
                                        </div>
                                        <div class=" col-12 col-md-6">
                                            4. When Time Out Exam Automatically Submit. <br> 
                                            5. Check Attempted Questions Before Submit. <br>
                                            6. Check Time Left. <br>
                                            7. Good Luck :-)  
                                        </div>
                                    </div>
                                  </div>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Total Questions</th>
                                <th>Attempt Left</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>            
                                <tr>
                                    <td scope="row">1</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->subjects->name }}</td>
                                    <td><span class="{{ $user->date!=date('Y-m-d')?'text-danger fw-bold':''; }}">{{date('d / m / Y', strtotime($user->date))  }} </span></td>
                                    <td>{{ gmdate("H:i:s", $user->time*60); }}  </td>
                                    <td> <span class="{{ count($user->assignexam)==0?'text-danger fw-bold':''; }}">{{ count($user->assignexam) }} </span></td>
                                    <td><span class="{{ $lat==0?'text-danger fw-bold':''; }}">{{ $lat }}</span></td>
                                    <td>
                                        @if (isset($disable))
                                          <a href="#" class=" disabled btn btn-danger btn-sm fw-bold" >Start Exam</a>
                                        @else
                                         <a href="{{ route('user.edit',$user->id) }}" class="btn btn-success btn-sm fw-bold" >Start Exam</a>
                                        @endif
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

</div>
