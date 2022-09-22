<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $payload = $request->validated();
        $user = User::where('name', $payload['name'])->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Data user tidak ditemukan');
        }
        if (Hash::check($payload['password'], $user->password)) {
            Auth::login($user);
            return redirect('/home');
        }
        return redirect()->back()->with('error', 'Password salah');
    }

    public function logout()
    {
        Auth::logout(request()->user());
        return redirect('/');
    }
}
