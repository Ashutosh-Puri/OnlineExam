@extends('admin.layout')
@section('admin_content')

    <div class="row w-100 m-0">
        <div class="col m-0 p-0">
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
            <div class="card">
                <div class="card-header bg-custom fw-bold text-white">
                    Scheduled Exams
                   
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered text-center table-inverse table-responsive-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Remark</th>
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
                                        @if ($exam->date < date('Y-m-d'))
                                            <span class="text-danger fw-bold">Date Expired </span>
                                        @else
                                            <span class="text-success fw-bold">OK </span>
                                        @endif
                                         
                                    </td>
                                </tr>
                            @empty
                             <td colspan="6">No Record Found..!</td>
                            @endforelse
                            {{ $exams->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
