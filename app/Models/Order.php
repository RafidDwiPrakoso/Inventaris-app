<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'inventaris', 'name_customer', 'total_price'
    ];

    // karna migration tdk bisa membaca tipe data array, jd array di migration(json), agar nantinya bentuk inventaris tetap berupa array (store/get) jd harus dipastikan dengan @casts
    protected $casts = [
        'inventaris' => 'array'
    ];
}
