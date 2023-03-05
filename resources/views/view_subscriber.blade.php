@extends('admin.layout')

@section('admin_content')

    <div class="row m-0">
        <div class="col p-5">
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
                    View subscribers
                </div>
                <div class="card-body table-responsive">
                    <table class="table  table-striped table-bordered text-center ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscribers as $i)
                                <tr>
                                    <td scope="row">{{ $i->id }}</td>
                                    <td> {{ $i->email }}</td>
                                    <td >  
                                        <a class="btn btn-danger btn-sm fw-bold"  onclick="event.preventDefault(); if( confirm('Are You Sure. You Want To Delete This Record')){document.getElementById('delete-subscriber').submit()};">Delete</a>
                                        <form id="delete-subscriber" action="{{ route('subscriber.destroy',$i->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>  
                                    </td>
                                    
                                </tr>
                            @empty
                             <td colspan="8">No Record Found..!</td>
                            @endforelse 
                           {{ $subscribers->links('pagination::bootstrap-5');  }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
