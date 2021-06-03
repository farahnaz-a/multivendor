<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqFormRequest extends FormRequest
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

            'question' => 'required|unique:faqs',
            'answer'   => 'required',
        ];
    }

    // public function messages()
    // {
    //     return [

    //         'question.required' => 'Khali thaka jabe na',
    //         'question.unique'   => 'Ei proshna database a ase',
    //         'answer.required'   => 'uttor deya lagbe',

    //     ];
    // }
}
