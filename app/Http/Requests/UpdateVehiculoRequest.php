<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'modelo' => 'required|min:3|max:255',
            'año' => 'required',
            'precio' => 'required|numeric|min:0',
            'marca_id' => 'required',


        ];
    }
    public function messages(): array
    {
        return [
            'modelo.required' => 'El modelo es obligatorio',
            'modelo.min' => 'El modelo es demasiado corto (min 3 caracteres)',
            'modelo.max' => 'El modelo es demasiado largo (max 255 caracteres)',
            'año.required' => 'El año es obligatorio',
            'año.min' => 'El año tiene que ser posterior a 1900',
            'año.max' => 'El año tiene que ser anterior a 2026',
            'precio.required' => 'El precio es obligatorio',
            'precio.min' => 'El precio tiene que ser un numero positivo',
            'marca_id.required' => 'La marca es obligatoria',

        ];
    }
}
