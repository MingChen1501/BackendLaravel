<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TextConfig extends Model
{
    use HasFactory;
    protected $table = 'text_configs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'page_id',
        'text_id',
        'position',
        'order'
    ];
    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
    public function text(): BelongsTo
    {
        return $this->belongsTo(Text::class);
    }
}
