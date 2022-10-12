<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $table = 'houses';
    protected $fillable = ['house_nbr', 'user_id', 'village_id', 'status'];
    // `house_nbr`, `user_id`, `village_id`, `status
}
