<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Keluar extends Model
{
    protected $table = 'product_keluar';

    protected $fillable = ['product_id','customer_id','qty','tanggal'];

    protected $hidden = ['created_at','updated_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
