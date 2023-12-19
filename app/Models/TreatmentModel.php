<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentModel extends Model
{
    use HasFactory;

    protected $table = 'tb_treatment';
    protected $primaryKey = 'id_treatment';
    protected $fillable = ['kd_treatment', 'nama_treatment', 'deskripsi_treatment', 'harga_treatment', 'diskon_treatment', 'foto'];
    public $timestamps = false;
}
