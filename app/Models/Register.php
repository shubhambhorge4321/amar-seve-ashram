<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = [
        'reg_type',
        'reg_name',
        'reg_mobile',
        'reg_email',
        'reg_address',
        'reg_message',
        'reg_occupation'
    ];
}
