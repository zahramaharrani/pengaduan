<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $guarded = ['id_tanggapan'];
    protected $primaryKey = 'id_tanggapan';

    public function petugas()
    {
    	return $this->belongsTo(Petugas::class, 'id_petugas');
    }

    public function pengaduan()
    {
    	return $this->belongsTo(Pengaduan::class, 'id_pengaduan');
    }
}
