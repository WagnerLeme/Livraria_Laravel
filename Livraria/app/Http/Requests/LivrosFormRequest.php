<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivrosFormRequest extends FormRequest
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
            'nome' => 'required | min:2'
        ];
    }
    
    public function messages()
    {
        return [
            'nome.required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo nome deve contem pelo menos 2 caracteres'
        ];
    }
}
