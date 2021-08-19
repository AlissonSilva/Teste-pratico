<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'plate' => 'required|max:7|min:7|regex:/[A-Z]{3}[0-9]{4}/',
            'renown' => 'required',
            'model_car' => 'required',
            'brand_car' => 'required',
            'year' => 'required|min:4|max:4',
            'id_owner'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'plate.regex' => 'Por favor, adicionar uma placa valida seguindo o seguinte padrão AAA1111.',
            'plate.requid' => 'Preenchimento do campo placa é obrigatório.',
            'renow.required' => 'Preenchimento do campo renavam é obrigatório.',
            'model_car.required' => 'Preenchimento do campo modelo é obrigatório.',
            'brand_car.required' => 'Preenchimento do campo marca é obrigatório.',
            'year.required' => 'Preenchimento do campo ano é obrigatório.',
        ];
    }
}
