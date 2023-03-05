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
                    View Teachers
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('admin.create') }}">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered text-center table-inverse table-responsive-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($admins as $admin)
                                <tr>
                                    <td scope="row">{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->role == '1'?'Teacher':'Student'; }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm fw-bold" href="{{ route('admin.edit',$admin->id) }}">Edit</a>

                                        <a class="btn btn-danger btn-sm fw-bold" onclick="$(this).parent().find('form').submit()">Delete</a>
                                        <form action="{{ route('admin.destroy',$admin->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                             <td colspan="5">No Record Found..!</td>
                            @endforelse
                            {{ $admins->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
