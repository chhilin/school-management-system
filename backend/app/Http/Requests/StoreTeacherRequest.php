<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StoreTeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    protected function failedValidation(ValidationValidator $validator)
    {
        throw new HttpResponseException(response()->json(['success' => false, 'message' => $validator->errors()], 412));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'teacher_id' => 'required|unique:teachers',
            'khmer_name' => 'required',
            'english_name' => 'required',
            'gender' =>'required',
            'date_of_birth' =>'required',
            'address' =>'required',
            'phone_number' =>'required',
            'email' =>'required|email',
            'major' =>'required',
            'employment_status' =>'required',
            'hire_date' =>'required',
            'image' => 'mimes:jpeg,png,jpg,gif|max:5048',

            // 'user_id' =>'required',
        ];
    }
}
