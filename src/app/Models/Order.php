<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi mass assignment
    protected $fillable = [
        'customer_id',
        'order_number',
        'order_date',
        'status',
        'total_amount',
        'payment_method',
        'payment_status',
        'shipping_address',
        'shipping_cost',
        'shipping_status',
        'notes',
        'discount',
    ];

    // Relasi: Order milik satu Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // (Opsional) Relasi: Order memiliki banyak OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
