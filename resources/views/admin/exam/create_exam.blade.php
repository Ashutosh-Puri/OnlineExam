@extends('admin.layout')
@section('admin_content')

    <div status="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card">
                <div class="card-header bg-custom fw-bold text-white">
                    Create Exam
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('exam.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('exam.store') }}">
                        @csrf
                        <div class="row">
                            <label for="subject" class="col-12 col-md-1 form-label ">{{ __('Select Subject') }}</label>
                            <div class="col-12 col-md-5 ">
                                <div class="form-group ">
                                    <select class="form-control text-center @error('subject_id') is-invalid @enderror" name="subject_id" autocomplete="subject_id" autofocus>
                                        <option hidden>-- Select Subject --</option>
                                        @foreach ($subjects as $c)
                                            <option class="text-start "  {{ (old('subject_id')==$c->id)?'selected':''; }}
                                                value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subject_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <label for="name" class="col-12 col-md-1 form-label ">{{ __('Name') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="row mb-3">
                            <label for="date" class="col-12 col-md-1 form-label ">{{ __('Date') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="date" type="date" class="form-control  @error('date') is-invalid @enderror" min="{{ date('Y-m-d') }}" name="date" value="{{ old('date') }}"  autocomplete="date" autofocus>
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <label for="time" class="col-12 col-md-1 form-label ">{{ __('Time Minutes') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="time" type="number"    class=" form-control  @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}"  autocomplete="time" autofocus>
                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="row mb-3">
                            <label for="attempt" class="col-12 col-md-1 form-label ">{{ __('Attempt') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="attempt" type="number" min='0' class="form-control  @error('attempt') is-invalid @enderror" name="attempt" value="{{ old('attempt') }}"  autocomplete="attempt" autofocus>
                                @error('attempt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 py-3">
                                <label for="status" class="form-label   ">{{ __('Status') }}</label>
                                <input type="checkbox" name="status" id="status"class="form-check-inline mx-5 @error('status') is-invalid @enderror" {{ old('status')==true ? 'checked':'' ;}}  autocomplete="status">
                                <label for="status" class="form-label  ">{{ __('In Active') }}</label>
                            </div>
                        </div>
                       
                        <div class="row mb-0">
                            <div class="col-md-12 text-center ">
                                <button type="submit" class="btn btn-custom fw-bold">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
