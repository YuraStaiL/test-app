<?php

namespace App\Repositories;

use App\Exceptions\WrongOldPasswordException;
use App\Mail\VerificationEmail;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class UserRepository
{
    public function __construct(private User $model)
    {
    }

    public function update(int $id, array $data): User
    {
        Validator::validate($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
        ]);

        $user = $this->model::query()->findOrFail($id);

        $user->updateOrFail([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email']
        ]);

        return $user;
    }

    public function passwordUpdate(int $id, array $data): User|Exception
    {
        Validator::validate($data, [
            'old_password' => ['required'],
            'new_password' => ['required' ,'confirmed', Password::min(8)],
        ]);

        $user = $this->model::query()->findOrFail($id);

        if (!Hash::check($data['old_password'], $user->password)) {
            throw new WrongOldPasswordException();
        }

        $user->updateOrFail([
            'password' => Hash::make($data['new_password'])
        ]);

        return $user;
    }

    public function store(array $data): User
    {
        Validator::validate($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(8)]
        ]);

        return $user = User::query()
            ->create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'email_verification_token' => Str::random(32),
                'password' => Hash::make($data['password'])
            ]);
    }

    public function destroy(int $id): void
    {
//        $this->model::findOrFail($id)
//            ->delete();

         $user = User::find($id);
         $user->delete();
    }
}
