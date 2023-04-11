<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Traits\CheckPermission;

class EditController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $user = User::query()->findOrFail($id);

        return view('users.edit', [
            'user' => $user,
        ]);
    }
}
