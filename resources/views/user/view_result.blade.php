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
                    Search Result
                    <a href="{{ route('user.index') }}" class="btn btn-custom float-end btn-sm fw-bold"   >Back</a>
                </div>
                <div class="card-body">
                   <form action="{{ Route('result.store') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

            
                    <div class="row mb-0">
                        <div class="col12  text-center">
                            <button type="submit" class="btn btn-custom">
                                {{ __('View Result') }}
                            </button>
                        </div>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>

@endsection
