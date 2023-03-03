<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class phone extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'phone'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
