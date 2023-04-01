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
                    View Questions & Answers
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('questionanswer.create') }}">Create</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered text-center table-inverse ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Question</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @forelse ($questionanswers as $i)
                                <tr class="text-start">
                                    <td scope="row">{{ $i->id }}</td>
                                    <td> {{ $i->subjects->name }}</td>
                                    <td class="text-start"> {{ $i->question}}</td>
                                    <td >{{ $i->status== 0 ?'Active':'In Active'; }}</td>
                                    <td class="text-nowrap">
                                        <a class="btn btn-success btn-sm fw-bold" href="{{ route('questionanswer.show',$i->id) }}">View</a>
                                        <a class="btn btn-primary btn-sm fw-bold" href="{{ route('questionanswer.edit',$i->id) }}">Edit</a>
                                       
                                        <form  class="d-inline"id="delete-questionanswer" action="{{ route('questionanswer.destroy',$i->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger btn-sm fw-bold" type="submit" onclick="return confirm('Are You Sure. You Want To Delete This Record');" value="Delete">
                                        </form>  
                                    </td>
                                </tr>
                            @empty
                             <td colspan="5">No Record Found..!</td>
                            @endforelse
                            {{ $questionanswers->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
