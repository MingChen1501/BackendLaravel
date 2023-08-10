<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouchableObject extends Model
{
    use HasFactory;
    protected $table = 'touchable_objects';
    protected $primaryKey = 'id';
    protected $fillable = [
        'page_id',
        'text_id',
        'position',
        'order'
    ];
}
