<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContract extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }
}
