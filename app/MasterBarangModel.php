<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterBarangModel extends Model
{
    protected $table = 'master_barang';
    protected $fillable = ['kode_brg','nama_brg','harga_brg','stock_brg'];


    
}
