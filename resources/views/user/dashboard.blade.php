<div>
    @extends('user.layout')
@section('user_content')

{{ session(['mode' => '0']); }}
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
                   
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-sm table-striped table-bordered text-center table-inverse ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($exams as $exam)
                                <tr>
                                    <td scope="row">{{ $exam->id }}</td>
                                    <td>{{ $exam->name }}</td>
                                    <td>{{ $exam->subjects->name }}</td>
                                    <td>{{ $exam->date }}</td>
                                    <td>{{$exam->time  }} {{ $exam->time==1?'Minute':'Minutes'; }} </td>
                                    <td>
                                        {{-- <button wire:click="info({{ $exam->id }})" class="btn btn-success btn-sm fw-bold" >Start Exam</button> --}}
                                        <a href="{{ route('user.show',$exam->id) }}" class="btn btn-success btn-sm fw-bold" >View Exam</a>
                            
                                    </td>
                                </tr>
                            @empty
                             <td colspan="6">No Exams Sceduled..!</td>
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
