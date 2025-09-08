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
                    // ->directory('avatars') // Uncomment and set correct file in "edit" and "view", error on "lists"
                    // ->disk('public') // Uncomment to see correct file in "edit", error on "view" and "lists"
                    ->visibility('public') // Uncomment to see correct file in "view" and "edit", error on "lists"
                    ->maxSize(1024)
                    ->required(),
            ]);
    }
}
