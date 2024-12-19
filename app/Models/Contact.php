<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'cont_name',
        'cont_email',
        'cont_phone',
        'cont_web',
        'cont_message',
    ];
}
