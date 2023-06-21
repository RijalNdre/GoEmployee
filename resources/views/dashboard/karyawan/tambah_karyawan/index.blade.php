@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data karyawan</h1>
    </div>
    <div class="mb-5">
        <form action="{{route('karyawan.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <input type="text" name="gender" id="gender" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="noTelp" id="noTelp" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Posisi</label>
                <input type="text" name="posisi" id="posisi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Divisi</label>
                <input type="text" name="divisi" id="divisi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Departemen</label>
                <input type="text" name="departemen" id="departemen" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
