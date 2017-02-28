<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function getSignUp()
    {
        return view('auth.signup');
    }

    public function postSignUp(Request $request)
    {
        $this->validate($request, [
          'email' => 'required|unique:users|email|max:255',
          'username' => 'required|unique:users|alpha_dash|max:20',
          'password' => 'required|min:6'
        ]);

        User::create([
          'email' => $request->input('email'),
          'username' => $request->input('username'),
          'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('home')->with('info', 'Thank you for signing up.');
    }

    public function getSignIn()
    {
        return view('auth.signin');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required'
        ]);

        if (!Auth::attempt($request->only(['email', 'password']), $request->has('rememberme'))) {
            return redirect()->back()->with('info', 'Invalid email or password.');
        }

        return redirect()->route('home')->with('info', 'Signed in successfully.');
    }
}
