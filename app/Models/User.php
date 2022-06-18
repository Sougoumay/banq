<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'email',
        'password',
        'last_name',
        'telephone',
        'profession',
        'status',
        'family_status',
        'address'
    ];

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function plannings()
    {
        return $this->hasMany(Planning::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function pieces()
    {
        return $this->hasMany(Piece::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
