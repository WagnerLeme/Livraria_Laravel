<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivrosFormRequest extends FormRequest
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
            'nome', 'isbn', 'edicao', 'editora', 'autor', 'dataPublicacao', 'idioma', 'numeroPagina', 'categoria', 'quantidade' => 'required',

            'nome' => "min:3"

        ];
    }
    
    public function messages()
    {
        return [
            'nome.required' => 'O campo :attribute é obrigatório',
            'isbn.required' => 'O campo :attribute é obrigatório',
            'edicao.required' => 'O campo :attribute é obrigatório',
            'editora.required' => 'O campo :attribute é obrigatório',
            'autor.required' => 'O campo :attribute é obrigatório',
            'dataPublicacao.required' => 'O campo :attribute é obrigatório',
            'idioma.required' => 'O campo :attribute é obrigatório',
            'numeroPagina.required' => 'O campo :attribute é obrigatório',
            'categoria.required' => 'O campo :attribute é obrigatório',
            'quantidade.required' => 'O campo :attribute é obrigatório',
            
            
            
            'nome.min' => 'O campo nome precisa ter pelo menos três caracteres',
            'edicao.min' => 'O campo nome precisa ter pelo menos três caracteres',
            'editora.min' => 'O campo nome precisa ter pelo menos três caracteres',
            'autor.min' => 'O campo nome precisa ter pelo menos três caracteres',
            'idioma.min' => 'O campo nome precisa ter pelo menos três caracteres',
            'categoria.min' => 'O campo nome precisa ter pelo menos três caracteres',
        ];
    }
}