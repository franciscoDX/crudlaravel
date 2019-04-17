<?php

namespace App\Http\Requests;
use app\cliente;
use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:clientes,email',
            'age' => 'required',
            'avatar' => 'required',
        ];
    }
     public function messages(){
        return[
        'email.unique' => 'Este email ya se encuentra registrado.',
        ];
    }
}
