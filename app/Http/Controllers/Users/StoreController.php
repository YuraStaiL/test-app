<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{

    public function __invoke(Request $request, UserRepository $userRepository): RedirectResponse
    {
        $user = $userRepository->store($request->except(['_token']));

        Mail::to($user)->send(new VerificationEmail($user));

        return redirect()->route('users.index')->with('success', 'User added successfully. Please check email to activate account');
    }
}
