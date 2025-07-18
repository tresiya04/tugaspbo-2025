<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi mass assignment
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'address',
        'gender',
        'date_of_birth',
        'city',
        'postal_code',
        'status',
    ];

    // Relasi: satu customer bisa memiliki banyak orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
