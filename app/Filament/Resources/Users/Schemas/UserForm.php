<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Form;
use Illuminate\Support\Carbon;
use Filament\Forms\Components\Checkbox;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at')
                    ->default(fn () => now())
                    ->disabled(),
                TextInput::make('contact')
                    ->label('Contact Number')
                    ->tel()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Checkbox::make('is_vendor')
                    ->label('Create as Vendor')
                    ->default(false),
            ]);
    }
}
