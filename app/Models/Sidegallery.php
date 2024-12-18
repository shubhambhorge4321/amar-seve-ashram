<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidegallery extends Model
{
    use HasFactory;
    protected $fillable=["gal_title","gal_image","gal_event","gal_category","gal_year"];

}
