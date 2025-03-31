<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Adresses extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'adresses';

    protected $fillable = [
        'adress_city',
        'adress_street',
        'adress_buildingNumber',
        'adress_apartmentNumber',
        'postal_code',
    ];
}
