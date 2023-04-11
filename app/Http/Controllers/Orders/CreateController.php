<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class CreateController extends Controller
{
    public function __invoke(Request $request): View
    {
        $users = User::query()->get();
        return view('orders.create', ['users' => $users]);
    }
}
