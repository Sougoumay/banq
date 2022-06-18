<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'last_name',
        'telephone',
        'profession',
        'family_status',
        'address',
        'advisor_id',
        'birthday'
    ];

    public function advisor()
    {
        return $this->belongsTo(User::class,'advisor_id','id');
    }

    public function clientAccounts()
    {
        return $this->hasMany(ClientAccount::class);
    }

    public function clientContracts()
    {
        return $this->hasMany(ClientContract::class);
    }
}
