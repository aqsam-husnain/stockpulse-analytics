<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequest extends FormRequest
{
    
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
                'currency_code' => 'required|unique:currencies,currency_code,'.$this->id,
                'symbol' => 'required',
                'currency_placement' => 'required',
            ];
    }
}
