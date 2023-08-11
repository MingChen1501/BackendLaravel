<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Story extends Model
{
    use HasFactory;
    protected $table = 'stories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'type',
        'thumbnail',
        'language',
    ];
    public function pages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Page::class);
    }
    public function author() : BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
