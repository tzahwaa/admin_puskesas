@extends('dataposyandu.main')

@section('title', 'DataPosyandu')

@section('container')
<div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-2xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">
        Edit Data Posyandu
        </h2>
    </div>
    <div class="intro-y box p-5 mt-5">
        <div class="intro-y  items-center mt-8">
        <form method="POST" action="{{ route('posyandu.update', $value->id) }}">
        @csrf
            <div class="form-group">
                <label>Nama Posyandu</label>
                <input type="text" name="nama_posyandu" value="{{ $value->nama_posyandu }}" class="form-control">
                @error('nama_posyandu')
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
                <label>Kelurahan</label>
                <input type="text" name="kelurahan" value="{{ $value->kelurahan }}" class="form-control">
                 @error('kelurahan')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-5">
                <label>Kecamatan</label>
                <input type="text" name="kecamatan" value="{{ $value->kecamatan }}" class="form-control">
                @error('kecamatan')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center mt-12">
				<button class="btn btn-primary w-24 mr-3" style="margin-right: 6px;" type="submit">Simpan</button>
				<a href="{{ route('dataposyandu') }}" class="btn btn-danger w-24 ml-3">Batal</a>
			</div>
        </form>
    </div>
@endsection