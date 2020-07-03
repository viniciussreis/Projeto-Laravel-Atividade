<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MecanicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'cpf' => 'required|max:11',
        ];
    }

    public function messages()
    {
        return[
                'nome.*' => 'A nome é obrigatória,  com um maximo de 100 caracteres!!',
                'cpf.*' => 'CPF é obrigatório!'
        ];
    }
}
