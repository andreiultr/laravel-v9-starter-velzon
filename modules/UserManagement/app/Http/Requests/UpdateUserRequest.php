<?php

namespace Modules\UserManagement\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            // 'email' => ['required', 'string', 'email:rfc,dns,spoof'],
            'email' => ['required', 'string', 'email:rfc'],
            'role' => ['nullable', 'string'],
            'verified' => ['nullable', 'string'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
