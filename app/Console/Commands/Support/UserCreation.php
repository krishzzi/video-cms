<?php

namespace App\Console\Commands\Support;
use Filament\Commands\Concerns\CanValidateInput;
use Filament\Facades\Filament;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\Hash;

trait UserCreation
{
    use CanValidateInput;


    public function createFilamentUser()
    {
        $auth = Filament::auth();

        /** @var EloquentUserProvider $userProvider */
        $userProvider = $auth->getProvider();

        $userModel = $userProvider->getModel();

        $user = $userModel::create([
            'name' => $this->validateInput(fn () => $this->ask('Name'), 'name', ['required']),
            'email' => $this->validateInput(fn () => $this->ask('Email address'), 'email', ['required', 'email', 'unique:' . $userModel]),
            'password' => Hash::make($this->validateInput(fn () => $this->secret('Password'), 'password', ['required', 'min:8'])),
            'is_admin' => true,
        ]);

        $loginUrl = route('filament.auth.login');
        $this->info("Success! {$user->email} may now log in at {$loginUrl}.");
        if ($userProvider->getModel()::count() === 1 && $this->confirm('Would you like to show some love by hitting enter key?', true)) {
            $this->line('Thank you!');
        }
    }


    public function createSilentUser()
    {
        $auth = Filament::auth();

        /** @var EloquentUserProvider $userProvider */
        $userProvider = $auth->getProvider();

        $userModel = $userProvider->getModel();

        $user = $userModel::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        $loginUrl = route('filament.auth.login');
//        $this->info("Success! {$user->email} may now log in at {$loginUrl}.");
//        if ($userProvider->getModel()::count() === 1 && $this->confirm('Would you like to show some love by hitting enter key?', true)) {
//            $this->line('Thank you!');
//        }

        $this->info("Success! Super Admin Created :-");
        $this->info("Name : {$user->name}");
        $this->info("Email : {$user->email}");
        $this->info("Password : password");
        $this->info("Login here : {$loginUrl}");


    }



}
