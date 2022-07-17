<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'surname' => 'required',
            'country' => 'required',
            'region' => 'required',
            'city' => 'required',
            'code' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];
    }
}


