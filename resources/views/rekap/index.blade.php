@extends('rekap.main')
@section('container')
        <!-- BEGIN: Content -->
        <div class="content">
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 style="margin-left:20px;"class="text-lg font-bold mr-auto">
                    Rekap Absensi
                </h2>
            <!-- BEGIN: HTML Table Data -->
            <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                    <div class="col-md-4">
                        <select id="filter-organisasi" class="form-control filter">
                            <option value="">Pilih Kategori</option>
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
            
        </div>
                <!-- <div class="overflow-x-auto scrollbar-hidden">
                    <div id="tabulator" class="mt-5 table-report table-report--tabulator"></div>
                </div> -->  
            </div>
            <!-- END: HTML Table Data -->
        </div>
        <!-- END: Content
@endsection
