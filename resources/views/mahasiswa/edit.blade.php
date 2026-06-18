@extends('layout.app')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Mahasiswa</h1>
    <p class="mb-4">
        Form untuk memperbarui data mahasiswa dalam sistem akademik.
    </p>

    <!-- Card Form Edit -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Edit Mahasiswa
            </h6>
        </div>
        <div class="card-body">
            <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="prodi_id" class="font-weight-bold">Prodi</label>
                    <select name="prodi_id" id="prodi_id" class="form-control" required>
                        @foreach($prodis as $prodi)
                            <option value="{{ $prodi->id }}"
                                {{ $mahasiswa->prodi_id == $prodi->id ? 'selected' : '' }}>
                                {{ $prodi->nama_prodi }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nim" class="font-weight-bold">NIM</label>
                    <input type="text" 
                           id="nim"
                           name="nim" 
                           class="form-control" 
                           value="{{ $mahasiswa->nim }}" 
                           placeholder="Masukkan NIM" 
                           required>
                </div>

                <div class="form-group">
                    <label for="nama" class="font-weight-bold">Nama</label>
                    <input type="text" 
                           id="nama"
                           name="nama" 
                           class="form-control" 
                           value="{{ $mahasiswa->nama }}" 
                           placeholder="Masukkan nama mahasiswa" 
                           required>
                </div>

                <div class="form-group">
                    <label for="alamat" class="font-weight-bold">Alamat</label>
                    <textarea id="alamat" 
                              name="alamat" 
                              class="form-control" 
                              rows="5" 
                              placeholder="Masukkan alamat" 
                              required>{{ $mahasiswa->alamat }}</textarea>
                </div>

                <button type="submit" class="btn btn-warning shadow-sm">
                    <i class="fas fa-save"></i> Update
                </button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary shadow-sm">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>

</div>
@endsection