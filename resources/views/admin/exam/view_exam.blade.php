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
                            @forelse ($exams as $i)
                                <tr>
                                    <td scope="row">{{ $i->id }}</td>
                                    <td> {{ $i->name }}</td>
                                    <td> {{ $i->subjects->name}}</td>
                                    <td> {{ $i->date }}</td>
                                    <td> {{ $i->time }}</td>
                                    <td>{{ $i->status== 0 ?'Active':'In Active'; }}</td>
                                    <td >
                                       
                                        <a class="btn btn-primary btn-sm fw-bold" href="{{ route('exam.edit',$i->id) }}">Edit</a>
                                        <a class="btn btn-danger btn-sm fw-bold"  onclick="event.preventDefault(); if( confirm('Are You Sure. You Want To Delete This Record')){document.getElementById('delete-exam').submit()};">Delete</a>
                                        <form id="delete-exam" action="{{ route('exam.destroy',$i->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
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
