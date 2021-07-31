<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table ="pembelis";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama_pembeli','no_tlp','alamat','produk_dibeli','jumlah_dibeli'];
}
