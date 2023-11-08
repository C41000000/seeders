<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'modelo', 'placa'
    ];

    public $timestamps = false;

}
