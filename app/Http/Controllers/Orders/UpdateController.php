<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function __invoke(Request $request, OrderRepository $orderRepository, int $id): RedirectResponse
    {
        $orderRepository->update($id, $request->except(['_token']));

        return back()->with('success', 'Order updated successfully.');
    }
}
