<?php

namespace App\Models;

use Filament\Models\Contracts\HasAvatar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model implements HasAvatar
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'avatar_path',
    ];

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->avatar_path
            ? Storage::temporaryUrl($this->avatar_path, now()->addMinutes(5))
            : null;
    }
}
