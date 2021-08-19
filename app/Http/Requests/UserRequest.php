<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'cpf' => 'required|min:11',
            'role' => 'required',
            'phone' => 'required|min:11'
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'E-mail é obrigatório.',
            'email.email' => 'Por favor, adicionar um e-mail valido.',
            'cpf.required' => 'CPF obrigatório.',
            'cpf.min' => 'Algo de errado com o seu CPF. Por favor, adicionar um CPF valido.',
            'phone.required' => 'Campo de telefone obrigatório.',
            'phone.min' => 'Verificar o campo de telefone. Valor inválido.',
        ];
    }
}
