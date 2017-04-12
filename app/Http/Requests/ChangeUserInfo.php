<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeUserInfo extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $user = auth()->user();
        $user_id = $user->getid();

        return [
            //
            'name' => "max:255".$user_id,
            'email' => "unique:users|max:255".$user_id,
            'password' => 'min:6|confirmed'
        ];
    }
}
