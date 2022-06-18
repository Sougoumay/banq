<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OpeningAccountRequest extends FormRequest
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
            'number' => 'number|required|regex:/^0{3}[0-9]{8}$/i',
            'balance' => 'number|required',
            'type' => ['string','required',Rule::in(['PEL','CEL','Join','Savings','Current'])],
            'overdraft' => 'numeric|required',
            'client_id' => 'numeric|required'
        ];
    }
}
