<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $table = 'technology';
    protected $primaryKey = 'id';
    protected $fillable = [
        'technology',
        'status'
    ];
}
