<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comapany_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'comp_name',
        'password ',
        'is_deleted ',
    ];
}
