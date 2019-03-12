<?php

namespace Proday\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePromoRequest extends FormRequest
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
            'titulo_p' => 'required |max:45',
            'imagen_p' => 'required |image',
            'birthday_p' => 'required',
            'id_est1' => 'required'
        ];
    }
}
