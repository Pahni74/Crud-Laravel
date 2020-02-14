<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nis','nama','alamat','id_kelas'];
    public $timestamps= true;

    public function kelas() {
		return $this->belongsTo('App\Kelas','id_kelas');
    }
    public function mapel(){
        return $this->belongsToMany(
            'App\Siswa',
            'mapel_siswa',
            'id_siswa',
            'id_mapel'
        );
    }

}
