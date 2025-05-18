<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'document_number',
        'first_name',
        'last_name',
        'addres',
        'birthday',
        'phone_number',
        'email',
    ];
}
