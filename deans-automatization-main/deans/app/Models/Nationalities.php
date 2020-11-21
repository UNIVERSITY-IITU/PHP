<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationalities extends Model
{
    use HasFactory;
    protected $table = 'nationalities';
    public $timestamps = true;
    protected $fillable = [
        'name'
       
    ];
}
