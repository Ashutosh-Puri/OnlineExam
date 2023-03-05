<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','string'],
            'subject_id'=>['required','integer'],
            'date'=>['required','string'],
            'time'=>['required','integer','min:1','max:720'],  
            'attempt'=>['nullable','integer','min:0'], 
        ];
    }
}
