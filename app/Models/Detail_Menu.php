<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Menu extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table="detail_menu";
    // protected $primaryKey="id_ewallets";
    protected $fillable=[
        'id_menu',
        'id_pesan',
        'jumlah_pesan',
        'harga_item',
    ];
}
