<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /*
     * why we use HasFactory?
     * https://laravel.com/docs/8.x/eloquent#generating-factories
     * https://laravel.com/docs/8.x/eloquent#factory-callbacks
     * https://laravel.com/docs/8.x/eloquent#model-factories
     * https://laravel.com/docs/8.x/eloquent#model-factory-states
     * https://laravel.com/docs/8.x/eloquent#model-factory-callbacks
     * https://laravel.com/docs/8.x/eloquent#model-factory-states
     * generated ref link by Copilot
     *
     * */
    use HasFactory;
    protected $table='authors';
    protected $primaryKey='id';
    protected $fillable=[
        'first_name',
        'last_name',
        'date_of_birth',
        'country',
    ];

    /*
     * $table='author' is not necessary
     * because laravel will automatically
     * generate table name from model name
     * */
}
