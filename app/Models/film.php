<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;
    protected $table = "film";
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
