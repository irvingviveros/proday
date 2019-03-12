<?php

namespace Proday\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstabRequest extends FormRequest
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
            'nombre_est' => 'required |max:25',
            'imagen_e' => 'required |image',
            'direccion_est' => 'required',
            'facebook_est' => 'required',
            'id_n1' => 'required'
        ];
    }
}
