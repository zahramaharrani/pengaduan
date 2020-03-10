<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = 'masyarakat';
    protected $guarded = ['id_masyarakat'];
    protected $primaryKey = 'id_masyarakat';

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function pengaduan()
    {
    	return $this->hasMany(Pengaduan::class, 'id_masyarakat');
    }
}
