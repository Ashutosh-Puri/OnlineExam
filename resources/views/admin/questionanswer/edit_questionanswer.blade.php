@extends('admin.layout')
@section('admin_content')

    <div class="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card">
                <div class="card-header bg-custom fw-bold text-white">
                    Edit Question & Answer
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('questionanswer.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('questionanswer.update',$questionanswer->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-12  input-group py-1">
                                 <label for="subject_id" class=" input-group-text ">{{ __('Select Subject') }}</label>
                                    <select class="form-control  text-center @error('subject_id') is-invalid @enderror" name="subject_id" autocomplete="subject_id" autofocus>
                                        <option hidden>-- Select Subject --</option>
                                        @foreach ($subjects as $c)
                                            <option class="text-start "  {{ ($questionanswer->subject_id==$c->id)?'selected':''; }}
                                                value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subject_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               
                            </div>
                            <div class="col-12  input-group py-1">
                                <label for="question" class=" input-group-text px-4">{{ __('Question   ') }}&nbsp;</label>
                                <textarea id="question" type="text" class="form-control  @error('question') is-invalid @enderror" name="question" cols="30" rows="1" autocomplete="question" autofocus> {{ $questionanswer->question }}</textarea>
                                @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12  input-group py-1">
                                <label for="option_a" class="input-group-text "> <input type="radio" class=" mx-2" {{ $questionanswer->answer=='1'?'checked':'';  }} value="1" name="answer"  id="option_a" autofocus>{{ __('Option A') }}</label>
                                <textarea  type="text" class="form-control  @error('option_a') is-invalid @enderror" name="option_a" cols="30" rows="1" autocomplete="option_a" autofocus> {{ $questionanswer->option_a }}</textarea>
                                @error('option_a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12  input-group py-1">
                                <label for="option_b" class="input-group-text "> <input type="radio" class=" mx-2" value="2" {{ $questionanswer->answer=='2'?'checked':'';  }} name="answer"  id="option_b" autofocus>{{ __('Option B') }}</label>
                                <textarea  type="text" class="form-control  @error('option_b') is-invalid @enderror" name="option_b" cols="30" rows="1" autocomplete="option_b" autofocus> {{ $questionanswer->option_b }}</textarea>
                                @error('option_b')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12  input-group py-1">
                                <label for="option_c" class="input-group-text "> <input type="radio" class=" mx-2" value="3" name="answer" {{ $questionanswer->answer=='3'?'checked':'';  }} id="option_c" autofocus>{{ __('Option C') }}</label>
                                <textarea  type="text" class="form-control  @error('option_c') is-invalid @enderror" name="option_c" cols="30" rows="1" autocomplete="option_c" autofocus> {{ $questionanswer->option_c }}</textarea>
                                @error('option_c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12  input-group py-1">
                                <label for="option_d" class="input-group-text "> <input type="radio" class=" mx-2"  value="4" name="answer" {{ $questionanswer->answer=='4'?'checked':'';  }} id="option_d" autofocus>{{ __('Option D') }}</label>
                                <textarea  type="text" class="form-control  @error('option_d') is-invalid @enderror" name="option_d" cols="30" rows="1" autocomplete="option_d" autofocus> {{$questionanswer->option_d }}</textarea>
                                @error('option_d')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }} , Please Select Correct Answer </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="col-12 col-md-6 py-3">
                                    <label for="status" class="form-label   ">{{ __('Status') }}</label>
                                    <input type="checkbox" name="status" id="status"class="form-check-inline mx-5 @error('status') is-invalid @enderror" {{ old('status')==true ? 'checked':'' ;}}  autocomplete="status">
                                    <label for="status" class="form-label  ">{{ __('In Active') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-12 text-center ">
                                <button type="submit" class="btn btn-custom fw-bold">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
