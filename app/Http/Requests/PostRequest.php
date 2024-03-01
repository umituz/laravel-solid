<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return string[]
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|integer|min:0|max:1',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'title.required' => __('The title field is required.'),
            'title.string' => __('The title must be a string.'),
            'title.max' => __('The title may not be greater than 255 characters.'),
            'description.required' => __('The description field is required.'),
            'description.string' => __('The description must be a string.'),
            'status.required' => __('The status field is required.'),
            'status.integer' => __('The status must be an integer.'),
            'status.min' => __('The status must be at least 0.'),
            'status.max' => __('The status may not be greater than 1.'),
        ];
    }

    /**
     * Get custom attribute names for validator errors.
     *
     * @return string[]
     */
    public function attributes(): array
    {
        return [
            'title' => __('title'),
            'description' => __('description'),
            'status' => __('status'),
        ];
    }
}
