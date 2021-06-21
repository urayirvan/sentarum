<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpm extends Model
{
    protected $dates = ['created_at, updated_at'];

    protected $table = 'tpm';
    protected $fillable = ['nik','nama','tmp_lahir','tgl_lahir','alamat','id_bank','no_rekening','phone'];

    public function bank()
    {
        return $this->hasMany('App\Bank');
    }
}
