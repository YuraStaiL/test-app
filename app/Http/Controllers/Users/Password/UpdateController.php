<?php

namespace App\Http\Controllers\Users\Password;

use App\Exceptions\WrongOldPasswordException;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UpdateController extends Controller
{
    public function __invoke(Request $request, UserRepository $userRepository, int $id): RedirectResponse
    {
        try {
            $userRepository->passwordUpdate($id, $request->all());
        } catch (WrongOldPasswordException $exception) {
            return redirect()
                ->route('admin.users.edit', $id)
                ->with('error', 'Old password doesn\'t match!');
        }

        return back()->with('success', 'Password changed successfully!');
    }
}
