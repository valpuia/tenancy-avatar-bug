<?php

namespace App\Filament\Pages\Tenancy;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Tenancy\EditTenantProfile;
use Filament\Schemas\Schema;

class EditTeamProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Team profile';
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('avatar_path')
                    ->image()
                    ->avatar()
                    ->imageEditor()
                    ->hiddenLabel()
                    ->circleCropper()
                    ->directory('teams')
                    ->maxSize(1024),

                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
