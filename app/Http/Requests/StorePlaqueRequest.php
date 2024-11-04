<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlaqueRequest extends FormRequest
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
            'name' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'email|unique:plaques,email',
            'age' => 'required|integer',
            'sexe' => 'required',
            'address' => 'required|string',
            'city' => 'required|string',
            'profession' => 'required|string',
            'phone' => 'required|integer',
            'image' => 'required|mimes:png,jpg,jpeg,svg|max:2000',
            'immatriculation' => 'required|string|unique:plaques,immatriculation',
            'type' => 'required|string'
        ];
    }
}
