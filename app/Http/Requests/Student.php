<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class Student extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // bail sirve para que todo sea obligatorio
            'name_student'=>'bail|required|alpha', //Para guiones y apostrófes
            'email_student'=>'bail|required|email',
            'password_student'=>'bail|required|between:4,10'
        ];
    }
}
