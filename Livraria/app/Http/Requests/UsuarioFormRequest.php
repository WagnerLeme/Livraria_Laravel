<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'nome', 'telefone', 'email', 'endereco', 'senha','permissao' => 'require|min:6'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo :attribute é obrigatório',
            'telefone.required' => 'O campo :attribute é obrigatório',
            'email.required' => 'O campo :attribute é obrigatório',
            'endereco.required' => 'O campo :attribute é obrigatório',
            'senha.required' => 'O campo :attribute é obrigatório',
            
            'senha.min' => 'O campo :attribute é obrigatório',
            
        ];
    }
}
