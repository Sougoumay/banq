<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['type','name','director_id'];

    public function director()
    {
        return $this->belongsTo(User::class,'director_id','id');
    }
}
