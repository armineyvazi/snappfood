<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantownerRequest extends FormRequest
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
        return [
            'name' => 'required',
            'resturantcategory' => 'required',
            'city' => 'required',
            'address' => 'required|string',
            'phone'=>'required|string',
            'accountnumber' => 'required|string',
            'lat'=>'string',
            'lang'=>'string'

        ];
    }
}
