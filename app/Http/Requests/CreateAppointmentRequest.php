<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CreateAppointmentRequest extends FormRequest
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



    public function rules()
    {
        return [
            'name' => ['required', 'mimes:application/pdf']
        ];
    }

    // public function failedValidation(Validator $validator)
    // {
    //    abort(422, "something went wrong");
    // }

    public function passedValidation()
    {
        $this->merge(['is_guest'=>auth()->guest()]);
    }

    public function attributes()
    {
       return [
            'user_id' => 'user'
        ];
    }

    public function messages()
    {
        return [
            'user_id' => 'error in user value'
        ];
    }
}
