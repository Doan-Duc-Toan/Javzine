<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'post_id',
        'body',
        'status',
    ];
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
