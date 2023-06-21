@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Departemen</h1>
    </div>
    <form action="{{route('departemen.update', $departemen->id)}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{$departemen->nama}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Kode</label>
            <input type="text" name="kode" class="form-control" value="{{$departemen->kode}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
