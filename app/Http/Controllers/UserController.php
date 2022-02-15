<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDashboard(Request $request)
    {
        return view('/dashboard');
    }
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:80',
            'last_name' => 'required|max:80',
            'password' => 'required|min:3',
        ]);

        $email = $request['email'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:3',
        ]);
        $email = $request['email'];
        $password = $request['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/dashboard');
        }
        return redirect()->back();
    }
}
