<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register-form');
    }

    public function registerProcess(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('auth.register.form')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'user',
        ]);

        auth()->login($user);

        return redirect()
            ->route('home')
            ->with('feedback.message', 'Registro exitoso.');
    }

    public function loginForm()
    {
        return view('auth.login-form');
    }

    public function loginProcess(Request $request)
    {

        $credentials = $request->only(['email', 'password']);

        if(!auth()->attempt($credentials)) {
            return redirect()
                ->back(fallback: route('auth.login.form'))
                ->withInput()
                ->with('feedback.message', 'Las credenciales ingresadas no coinciden con nuestros registros.')
                ->with('feedback.type', 'danger');
        }

        return redirect()
            ->route('home')
            ->with('feedback.message', 'Inicio de sesión exitoso.');
    }

    public function logoutProcess(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.login.form')
            ->with('feedback.message', 'Cierre de sesión correcto.');
    }
}
