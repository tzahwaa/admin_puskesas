<table class="table table-bordered">
         <thead class="table-dark text-center">
                <tr>
                    <th>Nama</th>
                    <th>Nama Ibu</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Berat Badan</th>
                    <th>Panjang Badan</th>
                    <th>Zscore Berat Badan</th>
                    <th>Zscore Panjang Badan</th>
                    <th>Klasifikasi Berat Badan</th>
                    <th>Klasifikasi Panjang Badan</th>
                    <th>Puskesmas</th>
                    <th>Posyandu</th>
                </tr>
         </thead>
         <tbody id="balitaTableBody">
         @foreach($databalita as $keys=>$value)
            <tr class="table-dark text-center">
                <td>{{ $value->nama_anak }}</td>
                <td>{{ $value->nama_ibu}}</td>
                <td>{{ $value->alamat }}</td>
                <td>{{ $value->jenis_kelamin }}</td>
                <td>{{ $value->umur}}</td>
                <td>{{ $value->berat_badan }}</td>
                <td>{{ $value->panjang_badan }}</td>
                <td>{{ $value->zscore_berat_badan }}</td>
                <td>{{ $value->zscore_panjang_badan }}</td>
                <td>{{ $value->klasifikasi_berat_badan}}</td>
                <td>{{ $value->klasifikasi_panjang_badan}}</td>
                <td>{{ $value->puskesmas->nama_puskesmas }}</td>
                <td>{{ $value->posyandu->nama_posyandu }}</td>
            </tr>
    @endforeach
    </tbody>
</table>