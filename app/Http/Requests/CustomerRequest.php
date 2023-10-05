<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|max:40',
            'age' => 'required|integer',
            'gender_id' => 'required|integer',
            'prefecture_id' => 'required|integer',
            'address' => 'required|max:255',
            'pr_description' => 'required|max:2000',
            'hobby_id.*' =>'integer|distinct',
        ];
    }
}
