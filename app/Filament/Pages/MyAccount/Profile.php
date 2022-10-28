<?php

namespace App\Filament\Pages\MyAccount;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Profile extends Page implements HasForms
{
    use InteractsWithForms;

    public $user;
    public $roles;
    public $current_password;

    public $email;

    public $name;

    public $new_password;

    public $new_password_confirmation;

    protected static ?string $navigationGroup = 'Account';

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static string $view = 'filament.pages.my-account.profile';

    // hidden in navbar
    protected static function shouldRegisterNavigation(): bool
    {
        // return auth()->user()->canManageSettings();
        return false;
    }

    public function getCancelButtonUrlProperty()
    {
        return static::getUrl();
    }

    public function mount()
    {
        $this->user = Auth::user();
//        $this->user->load(['roles' => function ($query) {
//            $query->select('name');
//        }]);

        $this->form->fill([
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ]);
    }

    public function submit()
    {
        $this->form->getState();

        $state = array_filter([
            'name' => $this->name,
        ]);

        Auth::user()->update($state);

        if ($this->new_password) {
            Auth::user()->saveQuietly([
                'password' => Hash::make($this->new_password),
            ]);
        }

        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);
        $this->notify('success', 'Your profile has been updated.', true);
        return redirect()->route(self::getRouteName());
    }

    protected function getBreadcrumbs(): array
    {
        return [
            url()->current() => 'Profile',
        ];
    }

    protected function getFormSchema(): array
    {
        return [
//            Placeholder::make('Roles')
//                ->content('Content, displayed underneath the label'),
            Section::make('General')

                ->schema([
                    TextInput::make('name')
                        ->required(),
                    Placeholder::make('email')
                        ->label('Email Address')
                        ->content(function () {
                            return $this->email;
                        }),
                ]),
            Section::make('Update Password')

                ->schema([
                    TextInput::make('current_password')
                        ->label('Current Password')
                        ->password()
                        ->rules(['required_with:new_password'])
                        ->currentPassword()
                        ->autocomplete('off')
                        ->columnSpan(1),
                    Grid::make()
                        ->schema([
                            TextInput::make('new_password')
                                ->label('New Password')
                                ->password()
                                ->rules(['confirmed'])
                                ->autocomplete('new-password'),
                            TextInput::make('new_password_confirmation')
                                ->label('Confirm Password')
                                ->password()
                                ->rules([
                                    'required_with:new_password',
                                ])
                                ->autocomplete('new-password'),
                        ]),
                ]),
        ];
    }
}
