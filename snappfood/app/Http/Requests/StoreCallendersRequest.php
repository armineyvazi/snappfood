<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCallendersRequest extends FormRequest
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
            "sat-s" => "date_format:H:i",
            "sat-e" => "date_format:H:i|after:sat-s",
            "sun-s" => "date_format:H:i",
            "sun-e" => "date_format:H:i|after:sun-s",
            "mon-s" => "date_format:H:i",
            "mon-e" => "date_format:H:i|after:mon-s",
            "tue-s" => "date_format:H:i",
            "tue-e" => "date_format:H:i|after:tue-s",
            "wed-s" => "date_format:H:i",
            "wed-e" => "date_format:H:i|after:wed-s",
            "thu-s" => "date_format:H:i",
            "thu-e" => "date_format:H:i|after:thu-s",
            "fri-s" => "date_format:H:i",
            "fri-e" => "date_format:H:i|after:fri-s",
        ];
    }
}
