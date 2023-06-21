@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>
<div>
  <img src="{{'assets/images/team.jpg'}}" style="max-width: 100%; max-height:100%;" alt="gambar">
</div>
<div style="margin-top: 20px;">
  <h2>Fitur yang ada</h2>
</div>
<div class="row" style="margin-top: 10px; margin-bottom:50px; margin-left:1px; border">
    <div class="card" style="width: 18rem; ">
        <img src="{{'assets/images/karyawan.png'}}" class="cardsimg-top" alt="...">
        <div class="card-body">
          <p class="card-text" style="text-align: center;">Manajemen data karyawan</p>
          <a href="{{route('karyawan.index')}}"><button class="btn btn-primary">Selengkapnya</button></a>
        </div>
      </div>
      <div class="card" style="width: 18rem; margin-left:20px;">
        <img src="{{'assets/images/divisi.png'}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text" style="text-align: center;">Manajemen data divisi</p>
          <a href="{{route('divisi.index')}}"><button class="btn btn-primary">Selengkapnya</button></a>
        </div>
      </div>
      <div class="card" style="width: 18rem; margin-left:20px;">
        <img src="{{'assets/images/departemen.jpg'}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text" style="text-align: center;">Manajemen data departemen</p>
          <a href="{{route('departemen.index')}}"><button class="btn btn-primary">Selengkapnya</button></a>
        </div>
      </div>
    {{-- <h2>Total user : {{$total}}</h2> --}}
</div>
@endsection


