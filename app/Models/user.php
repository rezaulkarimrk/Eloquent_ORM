<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Post;

use App\Models\Phone;

class user extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email'
    ];
    
    public function phone(){
        return $this->hasOne(Phone::class);
    }
    public function post(){
        return $this->hasMany(Post::class);
    }
}
