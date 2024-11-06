<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' => 'required|email|min:4',
            'firstname' => 'required|string|min:4',
            'phone' => 'required|numeric|min:8',
            'state' => 'required|string|min:4',
            'profession' => 'required|string|min:4',
            'image' => 'image|mimes:png,jpg,jpeg,svg,pdf|max:2000'
        ];
    }
}
