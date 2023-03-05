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
                    View Question & Answer
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('questionanswer.index') }}">Back</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered  text-center table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Question</th>
                                <th>Option A</th>
                                <th>Option B</th>
                                <th>Option C</th>
                                <th>Option D</th>
                                <th>Answer</th>
                                <th>Status</th>                              
                            </tr>
                        </thead>
                        <tbody>
                                <tr class="text-start">
                                   
                                    <td scope="row">{{ $questionanswer->id }}</td>
                                    <td >{{ $questionanswer->question}}</td>
                                    <td>{{ $questionanswer->option_a }}</td>
                                    <td>{{ $questionanswer->option_b}}</td>
                                    <td>{{ $questionanswer->option_c }}</td>
                                    <td>{{ $questionanswer->option_d }}</td>
                                    <td> 
                                        @if($questionanswer->answer=='1') A @elseif ($questionanswer->answer=='2') B @elseif ($questionanswer->answer=='3') C @elseif ($questionanswer->answer=='4') D @endif 
                                    </td>
                                    <td>{{ $questionanswer->status==0?'Active':'In Active';}}</td>
                                   
                                </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
