<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function Register(Request $request) {

        $incoming_fields = $request->validate([
            'name'=> ['required', 'min:3', 'max:200', Rule::unique('users', 'name')],
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password'=>['required', 'min:8']
        ]);

        $incoming_fields['password'] = bcrypt($incoming_fields['password']);

        $user = User::create($incoming_fields);
        auth()->login($user);

        return redirect('/');
    }

    public function logout() {
        auth()->logout();
        return redirect("/");
    }
    
    public function login(Request $request) {
        $incoming_fields = $request->validate([
            'loginname'=>'required',
            'loginpassword' =>'required',
        ]);

        if (auth()->attempt(['name'=>$incoming_fields['loginname'], 'password'=>$incoming_fields['loginpassword']])) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }

    


}
