<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function showRegisterForm(): View
    {
        return view('auth.register');
    }

    public function register(Request $request, UserRepository $userRepository): RedirectResponse
    {
        $user = $userRepository->store($request->except(['_token']));

        Mail::to($user->email)->send(new VerificationEmail($user));

        return redirect()->route('login')->with('warning', "Account successfully registered. Please check your email to activate your account");
    }
}
