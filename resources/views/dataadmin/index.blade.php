@extends('databalita.main')

@section('title', 'Databalita   ')

@section('container')

    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-2xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">
        Data Balita
        </h2>
    </div>
    <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                        <div class="sm:flex items-center sm:mr-4">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Puskesmas</label>
                            <select id="tabulator-html-filter-field" class="form-control filter">
                                <option value="name">Pilih Puskesmas</option>
                                @foreach($list_puskesmas as $puskesmas)
                                <option value="{{$puskesmas->id}}">{{$puskesmas->nama_puskesmas}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="sm:flex items-center sm:mr-4">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Posyandu</label>
                            <select id="tabulator-html-filter-field" class="form-control filter">
                                <option value="">Pilih Posyandu</option>
                                @foreach($list_posyandu as $posyandu)
                                <option value="{{$posyandu->id}}">{{$posyandu->nama_posyandu}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <form method="GET" action="{{ url('databalita') }}">
                            <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" name="keyword">
                            <button class="btn btn-dark w-24 ml-4 mb-2 mt-2">Search</button>
                            </div>
                    </form>
                    <div class="flex mt-5 sm:mt-0">
                        <div class="dropdown w-1/2 sm:w-auto">
                            <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export EXCEL </a>
                                    </li>
                                    <li>
                                        <a id="tabulator-export-json" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export PDF </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto mt-8">
                <table class="table table-bordered">
         <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Nama</th>
                    <th>Nama Ibu</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Berat Badan</th>
                    <th>Panjang Badan</th>
                    <th>Detak Jantung</th>
                    <th>Zscore Berat Badan</th>
                    <th>Zscore Panjang Badan</th>
                    <th>Klasifikasi Berat Badan</th>
                    <th>Klasifikasi Panjang Badan</th>
                    <th>Klasifikasi Detak Jantung</th>
                </tr>
         </thead>
         @foreach($databalita as $keys=>$value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nama_anak }}</td>
                <td>{{ $value->nama_ibu}}</td>
                <td>{{ $value->alamat }}</td>
                <td>{{ $value->jenis_kelamin }}</td>
                <td>{{ $value->umur}}</td>
                <td>{{ $value->berat_badan }}</td>
                <td>{{ $value->panjang_badan }}</td>
                <td>{{ $value->detak_jantung }}</td>
                <td>{{ $value->zscore_berat_badan }}</td>
                <td>{{ $value->zscore_panjang_badan }}</td>
                <td>{{ $value->klasifikasi_berat_badan}}</td>
                <td>{{ $value->klasifikasi_panjang_badan}}</td>
                <td>{{ $value->klasifikasi_detak_jantung}}</td>
            </tr>
         @endforeach
     </table>
</div>
     <br>
        {{ $databalita->links() }}

@endsection
