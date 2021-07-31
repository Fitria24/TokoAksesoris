<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table ="produks";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama_barang','harga','stok','kategori','produk'];
    
        public function kategoris()
        {
            return $this->belongsTo('App\Models\Kategoris');
        }
}