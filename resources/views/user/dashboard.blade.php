<div>
    @extends('user.layout')
@section('user_content')

{{ session(['mode' => '0']); }}
    <div class="row w-100 m-0">
        <div class="col-12 m-0 p-0">
            @if (session('s-status'))
                <div class="alert m-4 alert-success" role="alert">
                    {{ session('s-status') }}
                </div>
            @endif
            @if (session('d-status'))
                <div class="alert m-4 alert-danger" role="alert">
                    {{ session('d-status') }}
                </div>
            @endif
            <div class="card m-2">
                <div class="card-header bg-custom fw-bold text-white">
                    Scheduled Exams
                   
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-sm table-striped table-bordered text-center table-inverse ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $m=1;
                            @endphp
                            @forelse ($exams as $exam)
                                <tr>
                                    <td scope="row">{{ $m++}}</td>
                                    <td>{{ $exam->name }}</td>
                                    <td class="text-start">{{ $exam->subjects->code  }}</td>
                                    <td class="text-start"> {{ $exam->subjects->name }}</td>
                                    <td><span class="{{ $exam->date!=date('Y-m-d')?'text-danger fw-bold':'text-success fw-bold'; }}">{{date('d / m / Y', strtotime($exam->date))  }} </span></td>
                                    <td>{{ gmdate("H:i:s", $exam->time*60); }} </td>
                                    <td>
                                       
                                        <a href="{{ route('user.show',$exam->id) }}" class="btn btn-success btn-sm fw-bold" >View Exam</a>
                            
                                    </td>
                                </tr>
                            @empty
                             <td colspan="7">No Exams Scheduled..!</td>
                            @endforelse
                            {{ $exams->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

</div>
