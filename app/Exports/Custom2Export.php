<?php

namespace App\Exports;

use App\Models\Tpm;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class Custom2Export extends DefaultValueBinder implements WithCustomValueBinder, FromQuery, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function bindValue(Cell $cell, $value)
    {
        if (is_numeric($value)) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }
        // else return default behavior
        return parent::bindValue($cell, $value);
    }

    //use Exportable;
    //protected $kec;
    public function __construct($bank,$kota,$kec) {
        $this->bank_id = $bank;
        $this->kotakabupaten_id = $kota;
        $this->kecamatan_id = $kec;
    }

    public function query()
    {
        return Tpm::query()->Where('bank_id',$this->bank_id)
                            ->Where('kotakabupaten_id',$this->kotakabupaten_id)
                            ->Where('kecamatan_id',$this->kecamatan_id);
    }

    public function map($data): array
    {
        //ini_set('precision',20);
        return [
            $data->nik,
            $data->nama,
            $data->bank->nama_bank,
            $data->no_rekening,
            $data->desa->nama,
            $data->kecamatan->nama,
            $data->kotakabupaten->nama,
        ];
    }

    public function headings(): array
    {
        return [
            'NIK',
            'Nama',
            'Nama Bank',
            'No Rekening',
            'Desa Lokasi',
            'Kecamatan Lokasi',
            'Kota/Kabupaten Lokasi',
        ];
    }
}
