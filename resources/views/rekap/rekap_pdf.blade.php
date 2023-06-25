<!doctype html>
<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta name="Viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Laporan Data Peminjam</title>
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th{
                font-size: 9pt;
            }
        </style>
        <center>
            <h5>Laporan Rekap Absensi</h5>
        </center>
        <div class="container">
            <div class="row">
            <table class="table table-bordered table-hover">
                <br>
                </br>
            <thead>
            <thead class="bg-primary text-white">
                <tr>
                    <th width="3%" class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Jabatan</th>
                    <th width="15%" class="text-center">Hadir</th>
                    <th width="15%" class="text-center">Alfa</th>
                    <th width="15%" class="text-center">Izin</th>
                    <th width="15%" class="text-center">Sakit</th>
                </tr>
            </thead>
            
            <tbody id="isi">
                @foreach($resource as $index => $res)
                <tr>
                    <td class="text-center">{{ $index+1 }}</td>
                    <td class="text-center">{{ $res->nama}}</td>
                    <td class="text-center">{{ $res->jabatan}}</td>
                    <td class="text-center">{{ count(App\Models\Absensi::where(['nama'=>$res->nama,'status'=>'Hadir'])->get()) }}</td>
                    <td class="text-center">{{ count(App\Models\Absensi::where(['nama'=>$res->nama,'status'=>'Alfa'])->get()) }}</td>
                    <td class="text-center">{{ count(App\Models\Absensi::where(['nama'=>$res->nama,'status'=>'Izin'])->get()) }}</td>
                    <td class="text-center">{{ count(App\Models\Absensi::where(['nama'=>$res->nama,'status'=>'Sakit'])->get()) }}</td>
                    </td>
                </tr>
                @endforeach
            </tbody>            
        </table>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body> 
        </html>