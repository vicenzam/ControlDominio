<?php

namespace Appdominio\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomainRequest extends FormRequest
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
            'client_id' => 'required', 
            'provider_id' => 'required', 
            'account_id' => 'required', 
            'nombre' => 'required', 
            'registro' => 'required', 
            'vence' => 'required', 
            'estado' => 'required'
        ];
    }
}
