<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /**
         * Always return true on development
         */
        if (config('app.end') !== 'production') {
            return true;
        }

       /**
         * @var App\Models\User $user
         */
        $user = auth()->user();
        return auth()->check() && $user->hasAnyPermission([
            'create.roles', 
            'edit.roles', 
            'delete.roles'
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'permissions' => 'required|array|exists:permissions,id'
        ];
    }
}
