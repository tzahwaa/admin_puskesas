@extends('dataposyandu.main')

@section('title', 'DataPosyandu   ')

@section('container')

    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-2xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">
        Data Posyandu
        </h2>
    </div>
    <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <form method="GET" action="{{ url('posyandu.search') }}">
                            <button class="btn btn-dark w-24 ml-4 mb-2 mt-2">Search</button>
                            </div>
                    </form>
                    <div class="flex mt-5 sm:mt-0">
                    <a class="btn btn-dark w-32 ml-4 mb-2 mt-2" href="{{ route('posyandu.create')}}">Tambah Data</a>
                        </div>
                    
                </div>
                <div class="overflow-x-auto mt-8">
                <table class="table table-bordered">
         <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Posyandu</th>
                    <th>Alamat</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
         </thead>
         @php $no = 1; @endphp
         @foreach($dataposyandu as $keys=>$value)
            <tr class="table-dark text-center">
                <td>{{ $no++ }}</td>
                <td>{{ $value->nama_posyandu }}</td>
                <td>{{ $value->alamat}}</td>
                <td>{{ $value->telepon }}</td>
                <td>{{ $value->sms_wa }}</td>
                <td><a href="{{ route('posyandu.edit', $value->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('posyandu.destroy', $value->id) }}" method="POST">
                            @csrf
                                <button class="btn btn-warning btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
            </tr>
         @endforeach
     </table>
     </form>
</div>
     <br>
        {{ $dataposyandu->links() }}
    @else
    <div>
        <h4>Data {{ $cari }} tidak ditemukan</h4>
        <a href="{{ route('dataposyandu'}}">Kembali</a>
    @endif
@endsection
