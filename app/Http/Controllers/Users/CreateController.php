<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class CreateController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('users.create');
    }
}
