<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CategoriaCreateRequest extends FormRequest
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
            'nombre' => 'required|alpha|min:3|max:20|regex:/^[\pL\s\-]+$/u',
            'descripcion'=>'required|alpha|min:4|max:50',
        ];
    }

    public function attributes()
  {
    return [
            'nombre'=>'Nombre',
            'descripcion'=>'Descripción',
           ];
        }

        public function messages()
  {
    return [
            'nombre.required'=>'El :attribute es necesario',
            'nombre.alpha'=>'El :attribute debe ser sólo letras',
            'nombre.min'=>'El :attribute no puede tener menos de 4 caracteres',
            'nombre.max'=>'El :attribute tiene más de 20 caracteres',
            'nombre.regex'=>'El :attribute no cumple con el formato',
            'descripcion.required'=>'La :attribute es necesaria',
            'descripcion.alpha'=>'El :attribute debe ser sólo letras',
            'descripcion.min'=>'El :attribute no puede tener menos de 4 caracteres',
            'descripcion.max'=>'El :attribute tiene más de 50 caracteres',
    ];
  }
}
