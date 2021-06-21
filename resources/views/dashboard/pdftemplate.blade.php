<center><h5>Tabel Data Rekening Bank TPM P3-TGAI</h4></center>
    <br> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 6pt;
        }
    </style>
     
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Nama Bank</th> 
                <th>No Rekening</th>  
                <th>Desa Lokasi</th>
                <th>Kecamatan Lokasi</th> 
                <th>Kota/Kabupaten Lokasi</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($list as $ls)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$ls->nik}}</td>
                <td>{{$ls->nama}}</td>
                <td>{{$ls->bank->nama_bank}}</td> 
                <td>{{$ls->no_rekening}}</td> 
                <td>{{$ls->desa->nama}}</td> 
                <td>{{$ls->kecamatan->nama}}</td>
                <td>{{$ls->kotakabupaten->nama}}</td> 
            </tr>
            @endforeach
        </tbody>
    </table>
            
    
    