<?php

namespace App\Http\Requests;

//helpers
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [// validazione Backend
            'title' => 'min:0|max:255',
            'description'=> 'min:0|max:255',
            'category'=> 'min:0|max:255',
        ];
    }
}
