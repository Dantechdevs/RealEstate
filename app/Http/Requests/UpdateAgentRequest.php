<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['required'],
            'username' => ['required'],
            'facebook' => ['required'],
            'instagram' => ['required'],
            'twitter' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
            'bio' => ['required'],
        ];
    }
}