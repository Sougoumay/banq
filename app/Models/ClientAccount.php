<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAccount extends Model
{
    use HasFactory;

    protected $fillable = ['overdraft','balance','number','type','client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }
}
