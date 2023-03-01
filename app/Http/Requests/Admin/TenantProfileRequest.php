<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TenantProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules =[
            'name'=>[
                'required',
                'string',
                'max:200'
            ],
            'email'=>[
                'required',
                'email:rfc,dns',
                'unique:tenant_profiles',
                'string',
                'max:200'
            ],
            'phone'=>[
                'required',
                'string',
                'max:10'
            ],
            'id_number'=>[
                'required',
                'string',
                'max:10'
            ],
            'image'=>[
                'nullable',
                'mimes:jpg,png,jpeg'
            ],
            'image_identity'=>[
                'nullable',
                'mimes:jpg,png,jpeg'
            ],
            'address'=>[
                'required',
                'string',
                'max:20'
            ],
            'occupation_status'=>[
                'string',
                'max:200',

            ],
            'occupation_place'=>[

                'string',
                'max:200',

            ],
            'emergency_contact_person'=>[
                'required',
                'string',
                'max:200'
            ],
            'emergency_contact_number'=>[
                'required',
                'string',
                'max:200'
            ],
        ];
        return $rules;
    }
}
