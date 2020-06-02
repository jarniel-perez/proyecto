<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteCreateRequest extends FormRequest
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
          'nombres' => 'required|alpha|min:4|max:20|regex:/^[\pL\s\-]+$/u',
          'direccion' => 'required|alpha|min:5|max:20|',
          'telefono' => 'required|numeric|min:5|max:20|',
          'email' => 'required|min:3|max:20|',
          'especial' => 'required|numeric|min:1|max:20|',
          'clientescol'=>'required|numeric|min:1|max:50',
        ];
    }

    public function attributes()
  {
    return [
            'nombre'=>'Nombre',
            'direccion'=>'Dirección',
            'telefono'=>'Teléfono',
            'email'=>'Correo Electrónico',
            'especial'=>'Cliente Especial',
            'clientescol'=>'CLientes COL',
           ];
        }

        public function messages()
  {
    return [
            'nombres.required'=>'El :attribute es necesario',
            'nombres.alpha'=>'El :attribute debe ser sólo letras',
            'nombres.min'=>'El :attribute no puede tener menos de 4 caracteres',
            'nombres.max'=>'El :attribute tiene más de 20 caracteres',
            'nombres.regex'=>'El :attribute no cumple con el formato',
            'direccion.required'=>'La :attribute es necesaria',
            'direccion.alpha'=>'La :attribute debe ser sólo letras',
            'direccion.min'=>'La :attribute no puede tener menos de 4 caracteres',
            'direccion.max'=>'La :attribute tiene más de 20 caracteres',
            'telefono.required'=>'EL :attribute es necesaria',
            'telefono.numeric'=>'El :attribute debe ser sólo números',
            'telefono.min'=>'El :attribute no puede tener menos de 4 caracteres',
            'telefono.max'=>'El :attribute tiene más de 20 caracteres',
            'email.required'=>'El :attribute es necesaria',
            'email.min'=>'El :attribute no puede tener menos de 4 caracteres',
            'email.max'=>'El :attribute tiene más de 50 caracteres',
            'especial.required'=>'EL :attribute es necesaria',
            'especial.numeric'=>'El :attribute debe ser sólo números',
            'especial.min'=>'El :attribute no puede tener menos de 4 caracteres',
            'especial.max'=>'El :attribute tiene más de 20 caracteres',
            'clientescol.required'=>'EL :attribute es necesaria',
            'clientescol.numeric'=>'El :attribute debe ser sólo números',
            'clientescol.min'=>'El :attribute no puede tener menos de 4 caracteres',
            'clientescol.max'=>'El :attribute tiene más de 50 caracteres',
    ];
  }
}
