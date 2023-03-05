@extends('admin.layout')
@section('admin_content')

    <div status="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card">
                <div class="card-header bg-custom fw-bold text-white">
                    Assign Exam
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('exam.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('assignexam.store') }}">
                        @csrf
                        <div class="row">
                            <input hidden type="text" value="{{ $exam_id }}" name="exam_id">
                            
                            <label for="question_id" class="col-12 col-md-12 form-label ">{{ __('Select Question') }}</label>
                            <div class="col-12 col-md-12 ">
                                <div class="form-group ">
                                    <select  multiple multiselect-search="true"  multiselect-select-all="true"class=" multiselect-search form-control text-center @error('question_id') is-invalid @enderror" name="question_id[]" autocomplete="question_id" autofocus>
                                        @foreach ($questions as $c)
                                            <option class="text-start "  {{ (old('question_id')==$c->id)?'selected':''; }} value="{{ $c->id }}">
                                                {{ $c->question }}
                                                
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('question_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 
                                </div>
                            </div> 
                        </div>
                        <div class="row my-4">
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
