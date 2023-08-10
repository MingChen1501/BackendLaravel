<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Text extends Model
{
    use HasFactory;
    protected $table = 'texts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'text'
    ];
    public function textConfigs(): HasMany
    {
        return $this->hasMany(TextConfig::Class);
    }
}
