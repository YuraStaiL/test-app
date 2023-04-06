<?php

namespace App\Observers;

use App\Models\Order;
use App\Models\User;

class UserObserver
{
    public bool $afterCommit = true;

    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleting" event.
     */
    public function deleting(User $user): void
    {
        $orders = Order::query()
            ->where('user_id', $user->id)
            ->pluck('id')
            ->toArray();

        Order::destroy($orders);
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        dd('From observer', $user);
        $orders = Order::query()
            ->where('user_id', $user->id)
            ->get();

        foreach ($orders as $order) {
            $order->delete();
        }
    }
}
