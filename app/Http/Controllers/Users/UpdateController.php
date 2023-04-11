<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UpdateController extends Controller
{

    public function __invoke(Request $request, UserRepository $userRepository, int $id): RedirectResponse
    {
        $user = User::find($id);
        $oldEmail = $user->email;
        $updatedUser = $userRepository->update($id, $request->except(['_token']));

        if ($oldEmail === $updatedUser->email) {
            return back()->with('success', 'Account updated successfully.');
        }

        $user->updateOrFail([
            'email_verification_token' => Str::random(32),
            'email_verified_at' => null
        ]);

        $user->refresh();

        Mail::to($user->email)->send(new VerificationEmail($user));

        return back()->with('success', 'Account updated successfully. Please check your email to activate your account');

    }
}
