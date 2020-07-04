<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            //'finish_date' => 'required|string|after:start_date'
            'description' => 'required|string',
            'color' => 'required|string'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
    */
    public function messages()
    {
        return [
            'description.required' => 'O campo descrição é obrigatório',
            'color.required' => 'O campo cor é obrigatório'
        ];
    }
}
