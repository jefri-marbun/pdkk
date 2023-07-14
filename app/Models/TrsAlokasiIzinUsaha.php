<?php

namespace silatng\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrsAlokasiIzinUsaha extends Model
{
    protected $table = 'trs_alokasi_izin_usaha';
    use HasFactory;
    public $timestamps = false;
    
    protected $primaryKey = 'id_alokasi_izin_usaha';

}
