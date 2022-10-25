<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVarient extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_varients';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id','sku','barcode','price'
    ];
    protected $dates = ['deleted_at'];

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
