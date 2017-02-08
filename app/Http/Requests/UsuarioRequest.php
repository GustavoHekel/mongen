<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
{
    /**
     * Rules to be returned
     * @var $array
     */
    public $rules = [];

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
        switch($this->method()) {
            case 'POST':
                $this->rules = [
                    'nombre' => 'required|string|max:255',
                    'email' => 'required|email|max:255|unique:sistema.usuarios,email',
                    'ano' => 'required|size:4',
                    'mes' => 'required',
                    'dia' => 'required',
                    'pais' => 'required|exists:sistema.paises,id_pais',
                    'password' => 'required|min:6'
                ];
        }
        return $this->rules;
    }
}
