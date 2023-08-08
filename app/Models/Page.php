<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function stories(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Story::class);
    }
}
