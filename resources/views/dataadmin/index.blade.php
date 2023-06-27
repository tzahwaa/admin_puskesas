@extends('dataadmin.main')

@section('title', 'Dataadmin ')

@section('container')

    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-2xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">
        Data Admin
        </h2>
    </div>
    <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
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
                        <form method="GET" action="{{ url('datapuskesmas') }}">
                            <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-56 2xl:w-full mt-2 sm:mt-0" name="keyword" placeholder="Cari username ...">
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
                    <a class="btn btn-dark w-32 ml-4 mb-2 mt-2" href="{{ route('admin.create')}}">Tambah Data</a>
                        </div>
                </div>
                <div class="overflow-x-auto mt-8">
                <table class="table table-bordered">
         <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
         </thead>
         @foreach($data as $keys=>$value)
         @php
            $pageNumber = ($dataadmin->currentPage() - 1) * $dataadmin->perPage() + $keys + 1;
            @endphp
            <tr class="table-dark text-center">
                <td>{{ $pageNumber }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email}}</td>
                <td><a href="{{ route('admin.edit', $value->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('admin.destroy', $value->id) }}" method="POST">
                            @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
            </tr>
         @endforeach
    </tbody>
     </table>
</div>
     <br>
        {{ $dataadmin->links() }}
@endsection