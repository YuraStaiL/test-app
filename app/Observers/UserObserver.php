<?php

namespace App\Observers;

use App\Models\Order;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "deleting" event.
     */
    public function deleting(User $user): void
    {
        Order::query()
            ->where('user_id', $user->id)
            ->delete();
    }
}
