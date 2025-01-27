@extends('user.layout')
@section('content')

    <div class="row  m-5">
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
                    View Result
                    <a class="btn btn-custom btn-sm float-end" href="{{ route('result.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered text-center table-inverse table-responsive-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Exam</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($results as $result)
                            <tr>
                                <td scope="row">{{ $result->id }}</td>
                                <td>{{ $result->user->name }}</td>
                                <td>{{ $result->user->email }}</td>
                                <td>{{ $result->exam->name }}</td>
                                <td>{{ $result->exam->subjects->name}}</td>
                                <td>{{ $result->exam->date}}</td>
                                <td>{{ $result->exam->time }} Minutes</td>
                                <td>{{ $result->marks }}</td>  
                            </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="8">No Result Found</td>
                                </tr>
                            @endforelse
                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
