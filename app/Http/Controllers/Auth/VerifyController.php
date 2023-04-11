<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;

class VerifyController extends Controller
{
    public function __invoke(string $token = null): RedirectResponse
    {
        if($token == null) {
            return redirect()->route('login')->with('success', 'Invalid Login attempt');
        }

        $user = User::where('email_verification_token',$token)->firstOrFail();
        if($user == null )
        {
            return redirect()->route('login')->with('success', 'Invalid Login attempt');
        }

        $user->update([
            'email_verified_at' => Carbon::now(),
            'email_verification_token' => ''
        ]);

        return redirect()->back()->with('success', 'Your account is activated, you can log in now');
    }
}
