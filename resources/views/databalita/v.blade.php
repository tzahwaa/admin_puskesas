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
                            <select name="puskesmas_id" id="puskesmasDropdown">
                                <option value="">Pilih Puskesmas</option>
                                @foreach($puskesmasList as $puskesmas)
                                    <option value="{{ $puskesmas->id }}">
                                    {{ $puskesmas->nama_puskesmas }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="sm:flex items-center sm:mr-4">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Posyandu</label>
                            <select name="posyandu_id" id="posyanduDropdown">
                                <option value="">Pilih Posyandu</option>
                            </select>
                        </div>
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            @if(session('search_message'))
                                <div class="confirmation-box">
                                    <div class="confirmation-content">
                                        <p>{{ session('search_message') }}</p>
                                        <button class="btn btn-primary w-24 confirm-button" onclick="closeConfirmationBox()">OK</button>
                                    </div>
                                </div>
                            @endif

                    <!-- Add your CSS styles -->
                    <style>
                    .confirmation-box {
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        background-color: #fff;
                        border: 1px solid #ccc;
                        padding: 20px;
                        width: 300px;
                        text-align: center;
                        z-index: 9999;
                    }

                    .confirmation-content {
                        position: relative;
                    }

                    .confirm-button {
                        margin-top: 10px;
                    }
                    </style>

                    <!-- Add your JavaScript code -->
                    <script>
                    function closeConfirmationBox() {
                        var confirmationBox = document.querySelector('.confirmation-box');
                        confirmationBox.style.display = 'none';
                    }
                    </script>
                        <form method="GET" action="{{ url('datapuskesmas') }}">
                            <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-56 2xl:w-full mt-2 sm:mt-0" name="keyword" placeholder="Cari nama balita ...">
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
         <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Ibu</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Berat Badan</th>
                    <th>Panjang Badan</th>
                    <th>Detak Jantung</th>
                    <th>Sistolik</th>
                    <th>Diastolik</th>
                    <th>Zscore Berat Badan</th>
                    <th>Zscore Panjang Badan</th>
                    <th>Klasifikasi Berat Badan</th>
                    <th>Klasifikasi Panjang Badan</th>
                    <th>Klasifikasi Detak Jantung</th>
                </tr>
         </thead>
         <tbody id="balitaTableBody">
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
                <td>{{ $value->sistolik }}</td>
                <td>{{ $value->diastolik }}</td>
                <td>{{ $value->zscore_berat_badan }}</td>
                <td>{{ $value->zscore_panjang_badan }}</td>
                <td>{{ $value->klasifikasi_berat_badan}}</td>
                <td>{{ $value->klasifikasi_panjang_badan}}</td>
                <td>{{ $value->klasifikasi_detak_jantung}}</td>
            </tr>
         @endforeach
    </tbody>
     </table>
</div>
     <br>
        {{ $databalita->links() }}
        <br/>
<br/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{url('filter.js')}}"></script>
{{-- balida --}}
<script>
$(document).ready(function() {
    // Fungsi untuk memperbarui dropdown Posyandu berdasarkan Puskesmas yang dipilih
    $('#puskesmasDropdown').change(function() {
        var selectedPuskesmasId = $(this).val();

        // Hapus data Posyandu yang ada
        $('#posyanduDropdown').empty().append('<option value="">Pilih Posyandu</option>');

        // Jika Puskesmas terpilih, ambil data Posyandu dari server
        if (selectedPuskesmasId) {
            $.ajax({
                url: '{{ route("posyandu.getPosyanduByPuskesmas") }}',
                type: 'GET',
                data: { puskesmas_id: selectedPuskesmasId },
                success: function(response) {
                    // Tambahkan data Posyandu ke dropdown
                    $.each(response, function(index, posyandu) {
                        $('#posyanduDropdown').append('<option value="' + posyandu.id + '">' + posyandu.nama_posyandu + '</option>');
                    });
                }
            });
        }
    });

    // Fungsi untuk memperbarui tabel Balita berdasarkan Puskesmas dan Posyandu yang dipilih
    $('#posyanduDropdown').change(function() {
        var selectedPuskesmasId = $('#puskesmasDropdown').val();
        var selectedPosyanduId = $(this).val();

        // Hapus data Balita yang ada
        $('#balitaTableBody').empty();

        // Jika Puskesmas dan Posyandu terpilih, ambil data Balita dari server
        if (selectedPuskesmasId && selectedPosyanduId) {
            $.ajax({
                url: '{{ route("balita.getBalitaByPosyandu") }}',
                type: 'GET',
                data: { puskesmas_id: selectedPuskesmasId, posyandu_id: selectedPosyanduId },
                success: function(response) {
                    // Tambahkan data Balita ke tabel
                    $.each(response, function(index, balita) {
                        var newRow = '<tr>' +
                            '<td>' + balita.id + '</td>' +
                            '<td>' + balita.nama_anak + '</td>' +
                            '<td>' + balita.nama_ibu + '</td>' +
                            '<td>' + balita.alamat + '</td>' +
                            '<td>' + balita.jenis_kelamin + '</td>' +
                            '<td>' + balita.umur + '</td>' +
                            '<td>' + balita.berat_badan + '</td>' +
                            '<td>' + balita.panjang_badan + '</td>' +
                            '<td>' + balita.detak_jantung + '</td>' +
                            '<td>' + balita.sistolik + '</td>' +
                            '<td>' + balita.diastolik + '</td>' +
                            '<td>' + balita.zscore_berat_badan + '</td>' +
                            '<td>' + balita.zscore_panjang_badan + '</td>' +
                            '<td>' + balita.klasifikasi_berat_badan + '</td>' +
                            '<td>' + balita.klasifikasi_panjang_badan + '</td>' +
                            '<td>' + balita.klasifikasi_detak_jantung + '</td>' +
                            '</tr>';
                        $('#balitaTableBody').append(newRow);
                    });
                }
            });
        }
    });
});
</script>
@endsection