@extends('dashboard.main')

@section('title', 'Dashboard')

@section('container')

    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="normal-case text-2xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">
        Rekap Data Balita
        </h2>
    </div>
    <div class="row">
    <div class="grid grid-cols-12 gap-6 mt-5">
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-4">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5">
                                                <div class="text-base text-slate-500 mt-1">Jumlah Balita</div>
                                                <div class="text-3xl font-small leading-8 mt-6">{{ $balita }} </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-4">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5 ">
                                                <div class="text-base text-slate-500 mt-1">Stunting</div>
                                                <div class="text-3xl font-small leading-8 mt-6">{{ $stunting }} </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-4">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5 ">
                                                <div class="text-base text-slate-500 mt-1">Tidak Stunting</div>
                                                <div class="text-3xl font-small leading-8 mt-6">{{ $totalTidakStunting }} </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-4">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5 ">
                                                <div class="text-base text-slate-500 mt-1">Berat Kurang</div>
                                                <div class="text-3xl font-small leading-8 mt-6">{{ $beratkurang }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-6">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5 ">
                                                <div class="text-base text-slate-500 mt-1">Berat Lebih</div>
                                                <div class="text-3xl font-small leading-8 mt-6">{{ $beratlebih }} </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-6">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5 ">
                                                <div class="text-base text-slate-500 mt-1">Berat Normal</div>
                                                <div class="text-3xl font-small leading-8 mt-6">{{ $beratnormal }}</div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                                
                            </div>
</div>
        <!-- END: Content
@endsection
