<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $fillable = ['user_id','title','post','file'];

    public function user(){
        $this->belongsTo(User::class);
    }
}
