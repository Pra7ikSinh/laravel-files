<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataValidation extends FormRequest
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
            //rules here
            "firstName" => 'required|alpha|max:20',
            "lastName" => 'required|alpha|max:20',
            "mobileNumber" => 'required|numeric|digits:10',
            "email" => 'required|email|unique:data,email',
            'profilePhoto'=>'nullable|mimes:jpeg,png|max:2048',
            "userName" => 'required|regex:/^[a-zA-Z0-9_]+$/',
            "password" => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            "cpassword" => 'required|same:password',
            "gender" => 'required|in:male,female',
            'languages' => 'required|array',
            'languages.*' => 'in:english,hindi,gujarati',
        ];
    }
}
