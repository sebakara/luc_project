<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReAllocation extends Model
{
    use HasFactory;
    protected $table = 're_allocations';
    protected $fillable = ['user_id', 'new_village_id','street_address','house_number', 'status'];
}
