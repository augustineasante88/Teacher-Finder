<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Notifications\WelcomeMessage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'index_number' => [
                'required',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
            'email' => [
                'required',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'index_number' => $input['index_number'],
            'phone_number' => $input['phone_number'],
            'level' => $input['level'],
            'subject' => $input['subject'],
            'user_type' => 3,
            'password' => Hash::make($input['password']),
        ]);

        Notification::send($user, new WelcomeMessage($user));

        return $user;
    }
}
