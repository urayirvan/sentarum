<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $dates = ['created_at, updated_at'];

    protected $table = 'bank';
    protected $fillable = ['id','nama_bank'];

    public function tpm()
    {
        return $this->hasMany('App\Models\Tpm');
    }
}
