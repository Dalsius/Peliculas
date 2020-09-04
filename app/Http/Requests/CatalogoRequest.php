<?php

namespace Peliculas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatalogoRequest extends FormRequest
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
             'titulo'=>'required|max45:',
             'año'=>'required|max8:',
             'director'=>'required|max64:',
             'portada'=>'required|max45:',
             'alquiler',
             'resumen'=>'required|max200:'
        ];
    }
}
