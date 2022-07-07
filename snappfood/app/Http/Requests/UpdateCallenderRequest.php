<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCallenderRequest extends FormRequest
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
                "sat-s" => "string",
                "sat-e" => "string",
                "sun-s" => "string",
                "sun-e" => "string",
                "mon-s" => "string",
                "mon-e" => "string",
                "tue-s" => "string",
                "tue-e" => "string",
                "wed-s" => "string",
                "wed-e" => "string",
                "thu-s" => "string",
                "thu-e" => "string",
                "fri-s" => "string",
                "fri-e" => "string",
            ];
    }
}
