<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BulkUploadRequest extends FormRequest
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
            'bulk_upload_file' => 'required|file|mimes:zip'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'This field is required.',
        ];
    }
}
