<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeContent extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'hero_eyebrow'           => 'nullable|string|max:255',
            'hero_title_main'        => 'required|string|max:255',
            'hero_title_highlight'   => 'nullable|string|max:255',
            'hero_desc'              => 'nullable|string',
            'hero_banner'            => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'about_title_main'       => 'nullable|string|max:255',
            'about_title_highlight'  => 'nullable|string|max:255',
            'about_desc'             => 'nullable|string',
            'feature_1_title'        => 'nullable|string|max:255',
            'feature_1_desc'         => 'nullable|string|max:255',
            'feature_2_title'        => 'nullable|string|max:255',
            'feature_2_desc'         => 'nullable|string|max:255',
            'feature_3_title'        => 'nullable|string|max:255',
            'feature_3_desc'         => 'nullable|string|max:255',
        ];
    }
}