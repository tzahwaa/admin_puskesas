@extends('dataposyandu.main')

@section('title', 'DataPosyandu')

@section('container')

    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-2xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">
        Data Posyandu
        </h2>
    </div>
    <div class="intro-y box p-5 mt-5">
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
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
                        <form method="GET" action="{{ url('dataposyandu') }}">
                            <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-56 2xl:w-full mt-2 sm:mt-0" name="keyword" placeholder="Cari posyandu ...">
                            <button class="btn btn-dark w-24 ml-4 mb-2 mt-2">Search</button>
                            </div>
                    </form>
                    <div class="flex mt-5 sm:mt-0">
                    @if(session('success'))
                        <div class="confirmation-box">
                            <div class="confirmation-content">
                                <p>{{ session('success') }}</p>
                                <button class="btn btn-primary w-24 confirm-button" onclick="closeConfirmationBox()">OK</button>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                <label for="puskesmas">Pilih Puskesmas:</label>
                <select name="puskesmas_id" id="puskesmasDropdown">
                        <option value="">Pilih Puskesmas</option>
                        @foreach($puskesmasList as $puskesmas)
                            <option value="{{ $puskesmas->id }}">{{ $puskesmas->nama_puskesmas }}</option>
                        @endforeach
                    </select>
            </div>
                    <!-- Add your CSS styles -->
                    <style>
                    .confirmation-box {
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        background-color: #D3D3D3;
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
                        margin-top: 30px;
                    }
                    </style>

                    <!-- Add your JavaScript code -->
                    <script>
                    function closeConfirmationBox() {
                        var confirmationBox = document.querySelector('.confirmation-box');
                        confirmationBox.style.display = 'none';
                    }
                    </script>
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
         @foreach($dataposyandu as $keys=>$value)
         @php
            $pageNumber = ($dataposyandu->currentPage() - 1) * $dataposyandu->perPage() + $keys + 1;
            @endphp
            <tr class="table-dark text-center">
                <td>{{ $pageNumber }}</td>
                <td>{{ $value->nama_posyandu }}</td>
                <td>{{ $value->alamat}}</td>
                <td>{{ $value->kelurahan }}</td>
                <td>{{ $value->kecamatan }}</td>
                <td><a href="{{ route('posyandu.edit', $value->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('posyandu.destroy', $value->id) }}" method="POST">
                            @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
            </tr>
         @endforeach
     </table>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#puskesmasDropdown').change(function() {
        var selectedPuskesmasId = $(this).val();

        $.ajax({
            url: '{{ route("posyandu.getPosyanduByPuskesmasOnly") }}',
            type: 'GET',
            data: { puskesmas_id: selectedPuskesmasId },
            success: function(response) {
                var posyanduTableBody = $('#posyanduTableBody');
                posyanduTableBody.empty();

                $.each(response, function(index, posyandu) {
                    var newRow = '<tr>' +
                        '<td>' + posyandu.nama_posyandu + '</td>' +
                        '<td>' + posyandu.alamat + '</td>' +
                        '<td>' + posyandu.kelurahan + '</td>' +
                        '<td>' + posyandu.kecamatan + '</td>' +
                        '</tr>';
                    posyanduTableBody.append(newRow);
                });
            }
        });
    });
});
</script>

     </form>
</div>
     <br>
        {{ $dataposyandu->links() }}

@endsection
