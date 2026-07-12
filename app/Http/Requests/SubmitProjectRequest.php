<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SubmitProjectRequest extends FormRequest
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

        //dd($this->creator_email);

        return [
            
            'title' => [
                'required',
                'max:255',
                'min:2',
            ],
            'category' => [
                'required',
                'exists:project_categories,id'
            ],
            'website_url' => [
                'nullable',
                'website' => 'url:http,https'
            ],
            'github_url' => [
                'required',
                'website' => 'url:http,https'
            ],
            'preview_image' => [
                'required',
                'mimes:jpg,jpeg,png',
                'max:5120',
            ],
            'short_description' => [
                'required',
                'max:250'
            ],
            'description' => [
                'required',
                'max:65535',
            ],
            'creator_name' => [
                'nullable',
                'max:255',
            ],
            'creator_email' => [
                'nullable',
                'email'
            ],
            'creator_twitter_url' => [
                'nullable',
                'website' => 'url:http,https',
            ],
            //'file' => 'required|mimes:jpg,png,pdf|max:2048',
        ];
    }
}
