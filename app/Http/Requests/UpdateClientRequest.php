<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClientRequest extends FormRequest
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
            'name' => ['required', 'min:3'], //
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user, 'email')->where(function ($query) {
                $query->where('email', '!=', $this->input('email'));
            })], //
            'id' => ['required', 'size:14', Rule::unique('clients', 'id')->ignore($this->doctor, 'id')->where(function ($query) {
                $query->where('id', '!=', $this->input('id'));
            })], //
            'gender' => ['required', 'in:Male,Female'], //
            'date_of_birth' => ['required', 'date'], //
            'avatar_image' => ['image', 'mimes:jpeg,png', 'max:2048'], //
            'phone' => ['required', 'regex:/^01[0-1]\d{8}$/'], //
            'area_id' => ['required', 'integer', 'exists:areas,id'], //
            'street_name' => ['required', 'string'], //
            'building_no' => ['required', 'numeric'],
            'floor_number' => ['required', 'numeric'],
            'flat_number' => ['required', 'numeric'],
            'email_verified_at' => ['nullable', 'date_format:Y-m-d H:i:s']
        ];
    }
}
