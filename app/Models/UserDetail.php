<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = "user_details";
    protected $fillable = ["names", "user_id","national_id", "date_of_birth", "gender", "phone_number", "profile_image", "location_of_birth", "referal", "grand_referal"];
}
