<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use Exception;
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

        try {
            if (env('MAIL_USERNAME') === null || env('MAIL_PASSWORD') === null) {
                throw new Exception('For dev: configure the .env file configuration');
            }

            Mail::to($user->email)->send(new VerificationEmail($user));
        } catch (Exception $e) {
            $user->delete();

            return redirect()->route('login')->with('error', 'For dear team lid or another dev: configure the .env file configuration to send a confirmation email');
        }

        return redirect()->route('login')->with('warning', "Account successfully registered. Please check your email to activate your account");
    }
}
