<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LanguagesLoaded extends Model
{
    use HasFactory;

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class, 'languages_loaded', 'loaded_id', 'language_id');
    }
}
