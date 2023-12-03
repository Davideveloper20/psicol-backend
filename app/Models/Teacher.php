<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
        'name', 'document', 'email', 'phone', 'address', 'city', 'selectedIds'
    ];

    use HasFactory;
}
