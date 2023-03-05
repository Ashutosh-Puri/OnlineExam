<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionFormRequest extends FormRequest
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
            'subject_id'=>['required','integer'],
            'question'=>['required','string'],
           'option_a'=>['required','string'],
           'option_b'=>['required','string'],
            'option_c'=>['required','string'],
            'option_d'=>['required','string'],
            'answer'=>['required','integer'], 
        ];
    }
}
