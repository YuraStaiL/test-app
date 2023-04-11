<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    public function __invoke(): View
    {
        $orders = Order::query()->paginate(10);

        return view('orders.index', ['orders' => $orders]);
    }
}
