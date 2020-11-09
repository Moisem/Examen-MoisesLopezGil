<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class datalle_facturaRequest extends FormRequest
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
            'numero_factura' => 'required',
            'producto_id' => 'required',
            'cantidad' => 'required',
        ];
    }
}
