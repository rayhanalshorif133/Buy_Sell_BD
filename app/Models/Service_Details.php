<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Details extends Model
{
    use HasFactory;

    protected $table = 'service__details';

    protected $fillable = [
        'service_id',
        'title',
        'service_name_item',
        'image',
        'info'
    ];
}
