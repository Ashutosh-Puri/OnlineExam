@extends('user.layout')

@section('content')

    <div class="row  m-0">
        <div class="col  p-5">
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

            <div class="card m-5">
                <div class="card-header bg-custom fw-bold text-white">
                    Unsubscribe
                </div>
                <div class="card-body table-responsive">
                    <form method="POST" action="{{ route('subscriber.update',1) }}">
                        @method('PUT')
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
                            <div class="col-md-12 text-center ">
                                <button type="submit" class="btn btn-custom">
                                    {{ __('Unsubscribe') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
