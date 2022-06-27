<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
         * @var App\Models\Config $user
         */
        $user = auth()->user();
        return auth()->check() && $user->hasAnyPermission([
            'create.config',
            'edit.config',
            'delete.config'
        ]);    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'site_name' => 'string|required|max:255',
            'site_title' => 'string|max:255',
            'site_desc' => 'string|max:255',
            'site_logo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'color'=> 'string',
        ];
        return $rules;
    }
}
