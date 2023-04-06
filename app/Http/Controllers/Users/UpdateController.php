<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function __invoke(Request $request, UserRepository $userRepository, int $id): RedirectResponse
    {
        $userRepository->update($id, $request->except(['_token']));

        return back()->with('success', 'Account updated successfully.');
    }
}
