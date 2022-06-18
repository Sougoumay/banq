<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class UserRequest extends FormRequest
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
            'fist_name' => 'string|required',
            'last_name' => 'string|required',
            'address' => 'string|required',
            'telephone' => 'string|required|regex:/^[0-9]{10}$/i',
            'profession' => 'string|required',
            'family_status' => ['string','required',Rule::in(['single', 'married', 'divorced', 'widower', 'in relationship'])],
            'status' => ['string','required',Rule::in(['advisor','home_agent','director'])],
            'email' => 'email:rfc,dns'
        ];
    }
}
