<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class binRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $step = $this->input('step');
        return [
            'email' => 'required|email',
            'password' => 'required',
            'phone' => $step >= 2 ? ['required'] : ['nullable']
        ];
    }
}
