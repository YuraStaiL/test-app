<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(): View|RedirectResponse
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('users.index');
        }

        return view('auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);

        if (Auth::guard('web')->attempt($validated)) {
            return redirect()->route('users.index');
        }

        return redirect()
            ->route('login')
            ->withErrors([
                'email' => 'The user was not found, or the data was entered incorrectly'
            ]);
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('web')->logout();

        return redirect()->route('login');
    }
}
