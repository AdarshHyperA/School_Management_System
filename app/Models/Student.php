<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = '_hyper__school';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
    use HasFactory;
}

