<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecificationsInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_lap_tap'=>['required'],
            'model'=>['required'],
            'price'=>['required'],
            'display_size'=>['required'],
            'ram'=>['required'],
            'storage'=>['required'],
            'cpu'=>['required'],
            'gpn'=>['required'],
        ];
    }
}
