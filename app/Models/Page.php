<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';
    protected $primaryKey = 'id';
    protected $fillable = [
        'story_id',
        'page_number',
        'background'
    ];
    public function story(): BelongsTo
    {
        return $this->belongsTo(Story::class);
    }
    public function textConfigs(): HasMany
    {
        return $this->hasMany(TextConfig::class);
    }
}
