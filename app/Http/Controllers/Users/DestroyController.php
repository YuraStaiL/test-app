<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DestroyController extends Controller
{

    public function __invoke(Request $request, UserRepository $userRepository, int $id): RedirectResponse
    {
        $userRepository->destroy($id);

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
