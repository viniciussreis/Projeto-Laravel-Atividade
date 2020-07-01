<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarroRequest extends FormRequest
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
            'placa' => 'required|max:20',
            'modelo' => 'required|max:50',
            'ano' => 'required|max:4',
            'cor' => 'required|max:20'
        ];
    }

    public function messages()
    {
        return[
                'placa.*' => 'A placa do carro é obrigatória!',
                'modelo.*' => 'Modelo do carro é obrigatório, com um maximo de 50 caracteres!',
                'ano.*' => 'Ano é obrigatório!',
                'cor.*' => 'A cor é obrigatória, com um maximo de 20 caracteres!'
        ];
    }
}
