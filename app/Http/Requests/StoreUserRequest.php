<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
            'family_name' => "required|string|min:3",
            'email' => "required|email|unique:users,email",
            'password' => 'required|string|min:8',
            'user_photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
            'identity_photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
            'phone_number' => 'required|string|min:10|max:20',
            'position' => 'required|in:repository,filed',
            'job_position' => 'required|in:manager,worker,supervisor',
        ];
    }
}
