<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DestroyController extends Controller
{

    public function __invoke(Request $request, OrderRepository $orderRepository, int $id): RedirectResponse
    {
        $orderRepository->destroy($id);

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
