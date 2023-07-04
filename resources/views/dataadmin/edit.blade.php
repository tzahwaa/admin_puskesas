@extends('dataadmin.main')

@section('title', 'DataAdmin   ')

@section('container')
<div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-2xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">
        Edit Data Admin
        </h2>
    </div>
    <div class="intro-y box p-5 mt-5">
        <div class="intro-y  items-center mt-8">
        <form method="POST" action="{{ route('admin.update', $value->id) }}">
        @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" value="{{ $value->name }}" class="form-control" >
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-5">
                <label>Email</label>
                <input type="text" name="email" value="{{ $value->email }}" class="form-control">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-5">
                <label>Password</label>
                <input type="text" name="password" value="{{ $value->password}}" class="form-control">
                 @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center mt-12">
				<button class="btn btn-primary w-24 mr-3" style="margin-right: 6px;" type="submit">Simpan</button>
				<a href="{{ route('dataadmin') }}" class="btn btn-danger w-24 ml-3">Batal</a>
			</div>
        </form>
    </div>
@endsection