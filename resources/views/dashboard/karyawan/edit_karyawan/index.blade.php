@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit karyawan</h1>
    </div>
    <form action="{{route('karyawan.update', $karyawan->id)}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$karyawan->nama}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Gender</label>
            <input type="text" name="gender" class="form-control" placeholder="Nama" value="{{$karyawan->gender}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Nama" value="{{$karyawan->alamat}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Nama" value="{{$karyawan->email}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="text" name="noTelp" class="form-control" placeholder="Nama" value="{{$karyawan->noTelp}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Posisi</label>
            <input type="text" name="posisi" class="form-control" placeholder="Nama" value="{{$karyawan->posisi}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Divisi</label>
            <input type="text" name="divisi" class="form-control" placeholder="Nama" value="{{$karyawan->divisi}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Departemen</label>
            <input type="text" name="departemen" class="form-control" placeholder="Nama" value="{{$karyawan->departemen}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
