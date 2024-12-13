<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'lastname',
        'gender',
        'cpf',
        'cellphone',
        'birth',
        'street',
        'district',
        'city',
        'state'
    ];
}
