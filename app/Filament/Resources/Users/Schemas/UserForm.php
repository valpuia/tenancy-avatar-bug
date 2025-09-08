<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Operation;

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
                TextInput::make('password')
                    ->password()
                    ->required()
                    ->visibleOn(Operation::Create),
                FileUpload::make('avatar')
                    ->image()
                    ->avatar()
                    ->imageEditor()
                    ->hiddenLabel()
                    ->circleCropper()
                    ->disk('public')
                    ->directory('avatars')
                    ->maxSize(1024)
                    ->required(),
            ]);
    }
}
