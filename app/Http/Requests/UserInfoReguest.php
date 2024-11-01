<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoReguest extends FormRequest
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
            'name'=>['required'],
            //required یعنی داده باید وارد شود
            'family'=>['required'],
            'national-code'=>['required','min:10','max:10'],
            'email'=>['required']
             //'data-of-birth'=>[ 'required|date'];

        ];
    }
}
