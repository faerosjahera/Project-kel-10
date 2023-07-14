<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table="pembayaran";
    protected $primaryKey="id_transaksi";
    protected $fillable=[
        'id_users',
        'id_pesan',
        'tgl_pesan',
        'tgl_bayar',
        'total_bayar',
        'kode_promo'
    ];

}
