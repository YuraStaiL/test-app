<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __invoke(Request $request, UserRepository $userRepository): RedirectResponse
    {
        $userRepository->store($request->except(['_token']));

        return redirect()->route('users.index')->with('success', 'User added successfully.');
    }
}
