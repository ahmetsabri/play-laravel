<?php

namespace App\Http\Requests;

use App\Rules\TitleWordsCount;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Pluralizer;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
class UpdatePostRequest extends FormRequest
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

        // size , allowed keys, nested, custom error message
        return [
            'title' => ['required'],
        ];
    }

}
