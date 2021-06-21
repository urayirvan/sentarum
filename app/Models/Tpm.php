<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpm extends Model
{
    protected $dates = ['created_at, updated_at','tgl_lahir'];

    protected $table = 'tpm';
    protected $fillable = ['nik','nama','tmp_lahir','tgl_lahir','alamat','bank_id',
                            'no_rekening','phone','desa_id','kecamatan_id','kotakabupaten_id'];

    public function bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }

    public function desa()
    {
        return $this->belongsTo('App\Models\Desa');
    }

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }

    public function kotakabupaten()
    {
        return $this->belongsTo('App\Models\KotaKabupaten');
    }
}
