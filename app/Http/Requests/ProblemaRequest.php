<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProblemaRequest extends FormRequest
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
            'descricao' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return[
                'descricao.*' => 'É necessario descrever o problema,  com um maximo de 100 caracteres!'
        ];
    }
}
