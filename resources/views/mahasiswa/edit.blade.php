@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')

<div class="card">

    <h2>Edit Data Mahasiswa</h2>

    <p style="margin:8px 0 25px; color:#64748b;">
        Perbarui data mahasiswa.
    </p>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}"
          method="POST">

        @csrf

        @method('PUT')


        {{-- NIM --}}
        <div class="form-group">

            <label>NIM</label>

            <input
                type="text"
                name="nim"
                class="form-control"
                value="{{ old('nim', $mahasiswa->nim) }}"
                placeholder="Masukkan NIM">

            @error('nim')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

        </div>


        {{-- NAMA --}}
        <div class="form-group">

            <label>Nama Mahasiswa</label>

            <input
                type="text"
                name="nama"
                class="form-control"
                value="{{ old('nama', $mahasiswa->nama) }}"
                placeholder="Masukkan nama mahasiswa">

            @error('nama')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

        </div>


        {{-- JURUSAN --}}
        <div class="form-group">

            <label>Jurusan</label>

            <input
                type="text"
                name="jurusan"
                class="form-control"
                value="{{ old('jurusan', $mahasiswa->jurusan) }}"
                placeholder="Masukkan jurusan">

            @error('jurusan')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

        </div>


        {{-- EMAIL --}}
        <div class="form-group">

            <label>Email</label>

            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email', $mahasiswa->email) }}"
                placeholder="Masukkan email">

            @error('email')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

        </div>


        {{-- NO HP --}}
        <div class="form-group">

            <label>No HP</label>

            <input
                type="text"
                name="no_hp"
                class="form-control"
                value="{{ old('no_hp', $mahasiswa->no_hp) }}"
                placeholder="Masukkan nomor HP">

        </div>


        {{-- BUTTON --}}

        <button
            type="submit"
            class="btn btn-primary">

            Update Data

        </button>


        <a
            href="{{ route('mahasiswa.index') }}"
            class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>

@endsection