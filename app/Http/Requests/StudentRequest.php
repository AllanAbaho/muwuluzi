<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'surname'=>'required',
            'given_name'=>'required',
            'nationality'=>'required',
            'sex'=>'required',
            'date_of_birth'=>'required',
            'phone_number'=>'required',
            'district'=>'required',
            'county'=>'required',
            'subcounty'=>'required',
            'village'=>'required',
            'level_of_education'=>'required',
            'class'=>'required',
            'father_name'=>'required',
            'father_contact'=>'required',
            'mother_name'=>'required',
            'mother_contact'=>'required'
            //
        ];
    }
}
 