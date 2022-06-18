<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;

    protected $fillable = ['day','month','year','hour','start_week','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
