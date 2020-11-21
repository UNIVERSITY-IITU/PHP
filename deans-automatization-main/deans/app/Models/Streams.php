<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streams extends Model
{
    use HasFactory;
    protected $table = 'streams';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'year'
       
    ];
}