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
                    View  Assigend Questions
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('exam.index') }}">Back</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table sm-w-auto table-striped table-bordered text-center ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Exam ID</th>
                                <th>Exam Name</th>
                                <th>Subject</th>
                                <th>Questions</th>
                            
                            </tr>
                        </thead>
                        <tbody> <?php $i=1 ?>
                            @forelse ($assignexams  as $assignexam)
                                <tr class="text-start">

                                    <td scope="row">{{ $i++ }}</td>
                                    <td> {{$assignexam->exam_id}}</td>
                                    <td> {{ $assignexam->exams->name}}</td>
                                    <td> {{ $assignexam->exams->subjects->name }}</td>
                                    <td> {{ $assignexam->questions->question}}</td>
                                    
                                </tr>
                            @empty
                             <td colspan="7">No Record Found..!</td>
                            @endforelse
                            {{ $assignexams->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
