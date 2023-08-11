<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Audio extends Model
{
    use HasFactory;
    protected $table = 'audios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'text_id',
        'url',
        'sync_text_sound'
    ];
    public function text(): BelongsTo
    {
        return $this->belongsTo(Text::class);
    }
}
