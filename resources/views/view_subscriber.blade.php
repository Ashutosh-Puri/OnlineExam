@extends('admin.layout')

@section('admin_content')

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
                            @php
                                $m=1;
                            @endphp
                            @forelse ($subscribers as $i)
                                <tr>
                                    <td scope="row">{{ $m++}}</td>
                                    <td> {{ $i->email }}</td>
                                    <td >  
                                        <form id="delete-subscriber" action="{{ route('subscriber.destroy',$i->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-warning btn-sm fw-bold" type="submit" onclick="return confirm('Are You Sure. You Want To Delete This Record');" value="Unsubscribe">
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
   

@endsection
