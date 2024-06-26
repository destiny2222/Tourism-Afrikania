<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
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
            //
            'field'=>['required','string'],
            'password'=>['required'],
        ];
    }
    public function authenticate()
    {
        $adminusers = Admin::where('email', $this->field)->orWhere('phone',$this->field)->get();
        foreach ($adminusers as $adminuser) {
            if (!$adminuser || Hash::check($this->password, $adminuser->password)) {
                // dd($adminuser);
                Auth::guard('admin')->login($adminuser);
                return;
            }
            throw ValidationException::withMessages([
                'field'=>'The data does not match with what we have in our database'
            ]);
        }
        
    }
}
