<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table ="supliers";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama_suplier','no_tlp','alamat'];
}
