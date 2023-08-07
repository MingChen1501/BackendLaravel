<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
}
