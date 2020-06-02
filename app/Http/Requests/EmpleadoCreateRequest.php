<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoCreateRequest extends FormRequest
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
          'cedula' => 'required|numeric|min:5|max:20|',
          'nombre' => 'required|alpha|min:4|max:20|regex:/^[\pL\s\-]+$/u',
          'apellido' => 'required|alpha|min:4|max:20|regex:/^[\pL\s\-]+$/u',
          'direccion' => 'required|alpha|min:5|max:20|',
          'telefono' => 'required|numeric|min:5|max:20|',
          'email' => 'required|min:3|max:20|',
        ];
    }

    public function attributes()
  {
    return [
            'cedula'=>'Cédula',
            'nombre'=>'Nombre',
            'apellido'=>'Apellido',
            'direccion'=>'Dirección',
            'telefono'=>'Teléfono',
            'email'=>'Correo Electrónico',
           ];
        }

        public function messages()
  {
    return [
            'cedula.required'=>'La :attribute es necesaria',
            'cedula.numeric'=>'La :attribute debe ser sólo números',
            'cedula.min'=>'La :attribute no puede tener menos de 4 caracteres',
            'cedula.max'=>'La :attribute tiene más de 20 caracteres',
            'nombre.required'=>'El :attribute es necesario',
            'nombre.alpha'=>'El :attribute debe ser sólo letras',
            'nombre.min'=>'El :attribute no puede tener menos de 4 caracteres',
            'nombre.max'=>'El :attribute tiene más de 20 caracteres',
            'nombre.regex'=>'El :attribute no cumple con el formato',
            'apellido.required'=>'El :attribute es necesario',
            'apellido.alpha'=>'El :attribute debe ser sólo letras',
            'apellido.min'=>'El :attribute no puede tener menos de 4 caracteres',
            'apellido.max'=>'El :attribute tiene más de 20 caracteres',
            'apellido.regex'=>'El :attribute no cumple con el formato',
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
    ];
  }
}
