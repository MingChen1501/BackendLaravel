<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as UserAuth;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends UserAuth implements JWTSubject
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        'username',
        'password',
        'first_name',
        'last_name'
    ];

    /**
     * @return mixed
     */
    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    /**
     * @return array
     */
    public function getJWTCustomClaims(): array
    {
        return [$this->username, $this->first_name, $this->last_name];
    }
}
