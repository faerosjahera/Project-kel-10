<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ewallet extends Model
{
    use HasFactory;
    protected $table="ewallet";
    protected $primaryKey="id_ewallets";
    protected $fillable=[
        'nama_menu'
    ];
}
