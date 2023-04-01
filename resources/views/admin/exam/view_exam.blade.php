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
                    View Exams
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('exam.create') }}">Create</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table  table-striped table-bordered text-center ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th> Exam Action</th>
                                <th> Assign Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $m=1;
                            @endphp
                            @forelse ($exams as $i)
                                <tr>
                                    <td scope="row">{{ $m++ }}</td>
                                    <td> {{ $i->name }}</td>
                                    <td> {{ $i->subjects->name}}</td>
                                    <td> {{ date('d / m / Y', strtotime($i->date)) }}</td>
                                    <td>{{ gmdate("H:i:s", $i->time*60); }} </td>
                                    <td>{{ $i->status== 0 ?'Active':'In Active'; }}</td>
                                    <td >
                                       
                                        <a class="btn btn-primary btn-sm fw-bold" href="{{ route('exam.edit',$i->id) }}">Edit</a>
                                      
                                        <form class="d-inline" id="delete-exam" action="{{ route('exam.destroy',$i->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger btn-sm fw-bold" type="submit" onclick="return confirm('Are You Sure. You Want To Delete This Record');" value="Delete">
                                        </form>  
                                    </td>
                                    <td >
                                        <a class="btn btn-success btn-sm fw-bold" href="{{ route('assignexam.show',$i->id)}}">Assign QA</a>
                                        <a class="btn btn-warning btn-sm fw-bold" href="{{ route('assignexam.edit',$i->id)}}">View AQ</a>
                                         
                                    </td>
                                </tr>
                            @empty
                             <td colspan="8">No Record Found..!</td>
                            @endforelse
                            {{ $exams->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
