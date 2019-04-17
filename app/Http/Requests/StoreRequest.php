<?php

namespace App\Http\Requests;
use app\Book;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
        ];
    }

    public function messages(){
        return[
            'title.required' => 'El campo titulo es requerido',
            'description.required' => 'El campo de la descripcion es requerido',
            'title.min' => 'el campo no puede ser menor a :min caracteres',
            'title.max' => 'el campo no puede ser mayor a :max caracteres',
            'title.alpha' => 'el campo solo puede contener letras'
        ];
    }
}
