<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table =  "guru";
    protected $primaryKey = "id";
    protected $fillable = ['id','id_barang','nama','email','no_telp','alamat','created_at','deleted_at'];
    
}
