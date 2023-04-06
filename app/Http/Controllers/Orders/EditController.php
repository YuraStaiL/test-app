<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class EditController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $order = Order::query()->findOrFail($id);
        $users = User::query()->get();
        return view('orders.edit', [
            'order' => $order,
            'users' => $users
        ]);
    }
}
