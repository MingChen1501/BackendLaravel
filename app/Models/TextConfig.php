<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
