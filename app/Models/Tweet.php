<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeLatestFirst($query){
        return $query->orderBy('created_at', 'desc');
    }
}
