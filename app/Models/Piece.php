<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;

    protected $fillable = ['name','director_id'];

    public function director()
    {
        return $this->belongsTo(User::class,'director_id');
    }
}
