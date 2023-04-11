<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $users = User::query()->paginate(10);

        return view('users.index', ['users' => $users]);
    }
}
