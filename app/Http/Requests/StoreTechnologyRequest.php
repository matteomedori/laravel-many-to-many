<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTechnologyRequest extends FormRequest
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
            'name' => 'required|max:40|unique:technologies,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome della tecnologia richiesto',
            'name.max' => 'Numero massimo caratteri: :max',
            'name.unique' => 'La tecnologia esiste già'
        ];
    }
}
