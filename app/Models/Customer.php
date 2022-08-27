<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer';
    public $timestamps=true;
    protected $fillable=[
        'id', 'name','address','phone_number','created_at', 'uptaded_at',
    ];

    protected $primaryKey='id';
}
