@extends('datapuskesmas.main')

@section('title', 'DataPuskesmas   ')

@section('container')
<div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-2xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">
        Edit Data Puskesmas
        </h2>
    </div>
    <div class="intro-y box p-5 mt-5">
        <div class="intro-y  items-center mt-8">
        <form method="POST" action="{{ route('puskesmas.update', $value->id) }}">
        @csrf
            <div class="form-group">
                <label>Nama Puskesmas</label>
                <input type="text" name="nama_puskesmas" value="{{ $value->nama_puskesmas }}" class="form-control">
                @error('nama_puskesmas')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-5">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ $value->alamat }}" class="form-control">
                 @error('alamat')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-5">
                <label>Nomor Telepon</label>
                <input type="number" name="telepon" value="{{ $value->telepon }}" class="form-control">
                 @error('telepon')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-5">
                <label>Nomor WA</label>
                <input type="text" name="sms_wa" value="{{ $value->sms_wa }}" class="form-control">
                @error('sms_wa')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center mt-12">
				<button class="btn btn-primary w-24 mr-3" style="margin-right: 6px;" type="submit">Simpan</button>
				<a href="{{ route('datapuskesmas') }}" class="btn btn-danger w-24 ml-3">Batal</a>
			</div>
        </form>
    </div>
@endsection