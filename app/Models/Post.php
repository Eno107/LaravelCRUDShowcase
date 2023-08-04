<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    //new
    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    public function getUser(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
