<?php 
use App\Models\Tpm;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\KotaKabupaten;

function tpm()
{
    return Tpm::All()->count();
}

function desa()
{
    return Desa::All()->count();
}

function kecamatan()
{
    return Kecamatan::All()->count();
}

function kota()
{
    return KotaKabupaten::All()->count();
}

?>