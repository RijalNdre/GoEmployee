@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Departemen</h1>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <p class="card-text">Total Departemen: {{$departemenCount}}</p>
        </div>
    </div>
    <a href="/tambahDepartemen">
        <button class="btn btn-primary py-2 mt-2">Tambah data</button>
    </a>
    <div class="table-responsive mt-3">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departemens as $departemen)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $departemen->nama }}</td>
                        <td>{{ $departemen->kode }}</td>
                        <td>
                            <a href="/departemen/{{ $departemen->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/departemen/{{ $departemen->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/departemen/{{ $departemen->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus data?')">
                                    <span data-feather="x-circle"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
