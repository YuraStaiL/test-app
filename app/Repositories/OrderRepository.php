<?php

namespace App\Repositories;

use App\Exceptions\WrongOldPasswordException;
use App\Models\Order;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class OrderRepository
{
    public function __construct(private Order $model)
    {
    }

    public function update(int $id, array $data): Order
    {
        $order = $this->model::query()->findOrFail($id);

        $order->update([
            'user_id' => $data['user_id'],
            'order_name' => $data['order_name']
        ]);

        return $order;
    }

    public function store(array $data): Order
    {
        return Order::query()
            ->create([
                'user_id' => $data['user_id'],
                'order_name' => $data['order_name']
            ]);
    }

    public function destroy(int $id): void
    {
        $this->model::findOrFail($id)->delete();
    }
}
