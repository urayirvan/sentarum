<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $dates = ['created_at, updated_at'];

    protected $table = 'desa';
    protected $fillable = ['id','nama'];

    public function tpm()
    {
        return $this->hasMany('App\Models\Tpm');
    }
}
