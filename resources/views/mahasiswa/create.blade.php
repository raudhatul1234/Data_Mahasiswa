```php
@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')

<style>
    .page-heading {
        margin-bottom: 25px;
    }

    .page-heading h2 {
        font-size: 24px;
        margin-bottom: 7px;
    }

    .page-heading p {
        color: #64748b;
        font-size: 14px;
    }

    .form-card {
        max-width: 850px;
        margin: 0 auto;
    }

    .form-section-title {
        font-size: 17px;
        margin-bottom: 6px;
    }

    .form-description {
        color: #64748b;
        font-size: 13px;
        margin-bottom: 25px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0 20px;
    }

    .required {
        color: #dc2626;
    }

    .form-actions {
        display: flex;
        gap: 10px;
        padding-top: 20px;
        margin-top: 10px;
        border-top: 1px solid #e2e8f0;
    }

    @media (max-width: 600px) {
        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-actions {
            flex-wrap: wrap;
        }
    }
</style>

<div class="page-heading">
    <h2>Tambah Mahasiswa</h2>
    <p>Dashboard / Mahasiswa / Tambah Mahasiswa</p>
</div>

<div class="card form-card">

    <h3 class="form-section-title">Formulir Data Mahasiswa</h3>

    <p class="form-description">
        Lengkapi informasi mahasiswa pada kolom berikut.
        Kolom bertanda * wajib diisi.
    </p>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div class="form-grid">

            <div class="form-group">
                <label for="nim">
                    NIM <span class="required">*</span>
                </label>

                <input
                    id="nim"
                    type="text"
                    name="nim"
                    class="form-control"
                    value="{{ old('nim') }}"
                    placeholder="Contoh: 231001"
                    maxlength="20"
                    required>

                @error('nim')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama">
                    Nama Mahasiswa <span class="required">*</span>
                </label>

                <input
                    id="nama"
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ old('nama') }}"
                    placeholder="Masukkan nama lengkap"
                    required>

                @error('nama')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jurusan">
                    Jurusan <span class="required">*</span>
                </label>

                <input
                    id="jurusan"
                    type="text"
                    name="jurusan"
                    class="form-control"
                    value="{{ old('jurusan') }}"
                    placeholder="Contoh: Teknik Informatika"
                    required>

                @error('jurusan')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">
                    Email <span class="required">*</span>
                </label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}"
                    placeholder="nama@email.com"
                    required>

                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor HP</label>

                <input
                    id="no_hp"
                    type="text"
                    name="no_hp"
                    class="form-control"
                    value="{{ old('no_hp') }}"
                    placeholder="Contoh: 081234567890"
                    maxlength="20">

                @error('no_hp')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="form-actions">

            <button type="submit" class="btn btn-primary">
                Simpan Mahasiswa
            </button>

            <a href="{{ route('mahasiswa.index') }}"
               class="btn btn-secondary">
                Batal
            </a>

        </div>

    </form>

</div>

@endsection
```