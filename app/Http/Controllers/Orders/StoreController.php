<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __invoke(Request $request, OrderRepository $orderRepository): RedirectResponse
    {
        $orderRepository->store($request->except(['_token']));

        return redirect()->route('orders.index')->with('success', 'Order added successfully.');
    }
}
