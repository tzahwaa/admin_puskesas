@extends('rekap.main')
@section('container')

@if(count($resource))
        <div class="content">
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 style="margin-left:20px;"class="text-lg font-bold mr-auto">
                    Rekap Absensi
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <div class="mt-2 xl:mt-0">
                        <form method="get" action="{{ route('search') }}">
                            @csrf
                            <div class="relative mx-auto">
                                <div class="col-4">
                                    <input type="text" id="kata" class="form-control" name="kata" placeholder="Cari..." class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    <button type="submit"
                                    class="absolute top-0 right-0 inline-flex items-center px-2 py-2 ml-1 mr-2 text-sm focus:outline-none">
                                    <svg class="w-5 h-5 text-gray-500 transition dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 disabled:opacity-25"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    <div class="dropdown ml-auto sm:ml-0">
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="file-plus" class="w-4 h-4 mr-2"></i> New Category </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> New Group </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN: HTML Table Data -->
            <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                        <div class="sm:flex items-center sm:mr-4">
                            <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                <option value="name">All</option>
                                <option value="category">Category</option>
                                <option value="remaining_stock">Remaining Stock</option>
                            </select>
                        </div>
                    </form>
                    <div class="flex mt-5 sm:mt-0">
                        <div class="dropdown w-1/2 sm:w-auto">
                            <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="tabulator-export-csv" href="{{ route('rekap.rekap_pdf')}}" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export PDF </a>
                                    </li>
                                    <li>
                                        <a id="tabulator-export-json" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export EXCEL</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
    <div class="pull-left">
        <p>{{ $resource->links() }}</p>
    </div>
</div>
@else
    <div>
        <h4 style="margin-left:20px;"class="text-lg font-bold mr-auto">Data "{{ $cari }}" tidak ditemukan</h4>
        <br>
        <p align="left" style="margin-left:20px;"><a href="{{ route('rekap')}}" class="btn btn-primary">Kembali</a></p>
    </div>
@endif
@endsection
