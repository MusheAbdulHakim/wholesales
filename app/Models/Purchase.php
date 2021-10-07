<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
       'supplier_id', 'products','cost','comment'
    ];

    protected $casts = [
        'products'=> 'array'
    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}