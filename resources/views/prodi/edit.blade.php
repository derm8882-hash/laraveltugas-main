@extends('layout.app')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Prodi</h1>
    <p class="mb-4">
        Form untuk memperbarui nama prodi dalam sistem akademik.
    </p>

    <!-- Card Form Edit -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Edit Prodi
            </h6>
        </div>
        <div class="card-body">
            <form action="/prodi/{{ $prodi->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="jurusan_id" class="font-weight-bold">Jurusan</label>
                    <select name="jurusan_id" id="jurusan_id" class="form-control" required>
                        @foreach($jurusans as $jurusan)
                        <option value="{{ $jurusan->id }}"
                            {{ $prodi->jurusan_id == $jurusan->id ? 'selected' : '' }}>
                            {{ $jurusan->nama_jurusan }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_prodi" class="font-weight-bold">Nama Prodi</label>
                    <input type="text" 
                           id="nama_prodi"
                           name="nama_prodi" 
                           class="form-control" 
                           value="{{ $prodi->nama_prodi }}" 
                           placeholder="Masukkan nama prodi" 
                           required>
                </div>

                <button type="submit" class="btn btn-warning shadow-sm">
                    <i class="fas fa-save"></i> Update
                </button>
                <a href="{{ route('prodi.index') }}" class="btn btn-secondary shadow-sm">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>

</div>
@endsection         