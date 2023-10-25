<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name' => ['required','min:3'], //se puede usar un array para agregar mas validaciones
            'slug' => 'required|unique:cursos',
            'description' => 'required|min:10', //se puede usar un string para agregar mas validaciones
            'categoria' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del curso es requerido (nota del dev)',
            'description.required' => 'La descripcion del curso es requerida',
        ];
    }
}
