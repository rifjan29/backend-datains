<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /**
         * @var App\Models\User $user
         */
        $user = auth()->user();
        return auth()->check() && $user->hasAnyPermission([
            'create.users', 
            'edit.users', 
            'delete.users'
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'string|required|max:255',
            'email' => 'email|required|unique:users,email',
            'password' => 'string|min:6',
            'role' => 'required|exists:roles,id'
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['name'] = [
                'nullable',
                'string',
                'max:255'
            ];
            $rules['email'] = 'email|unique:users,email,'.$this->user->id;
            $rules['password'] = 'string|min:6';
        }

        return $rules;
    }
}
