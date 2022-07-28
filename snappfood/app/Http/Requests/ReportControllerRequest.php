<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportControllerRequest extends FormRequest
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
            'id'=>'integer',
            'confirm'=>'string',
            'id_restaurant'=>'integer',
            'id_user'=>'integer',
        ];
    }
}
