```php
@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')

<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
    }

    .page-header h2 {
        font-size: 24px;
        margin-bottom: 7px;
        color: #1e293b;
    }

    .page-header p {
        color: #64748b;
        font-size: 14px;
    }

    .stat-card {
        background: white;
        padding: 22px;
        border-radius: 10px;
        border: 1px solid #edf1f5;
        box-shadow: 0 2px 10px rgba(15,23,42,.05);
        margin-bottom: 22px;
    }

    .stat-label {
        color: #64748b;
        font-size: 13px;
        margin-bottom: 8px;
    }

    .stat-number {
        color: #2563eb;
        font-size: 30px;
        font-weight: bold;
    }

    .table-heading {
        font-size: 17px;
        margin-bottom: 5px;
    }

    .table-description {
        font-size: 13px;
        color: #64748b;
        margin-bottom: 20px;
    }

    .search-box {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }

    .search-box input {
        flex: 1;
        min-width: 0;
        padding: 11px 13px;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        font-size: 13px;
        outline: none;
    }

    .search-box input:focus {
        border-color: #2563eb;
    }

    .table-container {
        width: 100%;
        overflow-x: auto;
    }

    .table {
        min-width: 900px;
        margin-top: 0;
    }

    .badge-jurusan {
        display: inline-block;
        background: #eff6ff;
        color: #1d4ed8;
        padding: 5px 9px;
        border-radius: 5px;
        font-size: 12px;
    }

    .empty-state {
        text-align: center;
        padding: 45px 15px;
        color: #64748b;
    }

    .empty-state h3 {
        color: #334155;
        margin-bottom: 10px;
    }

    .empty-state p {
        margin-bottom: 20px;
        font-size: 14px;
    }

    @media (max-width: 600px) {
        .page-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .search-box {
            flex-wrap: wrap;
        }
    }
</style>

<div class="page-header">
    <div>
        <h2>Data Mahasiswa</h2>
        <p>Kelola dan pantau data mahasiswa Kampus App.</p>
    </div>

    <a href="{{ route('mahasiswa.create') }}"
       class="btn btn-primary">
        + Tambah Mahasiswa
    </a>
</div>

{{-- TOTAL MAHASISWA --}}
<div class="stat-card">
    <div class="stat-label">Total Mahasiswa Terdaftar</div>

    <div class="stat-number">
        {{ $totalMahasiswa }}
    </div>
</div>

{{-- TABEL DATA --}}
<div class="card">

    <h3 class="table-heading">Daftar Mahasiswa</h3>

    <p class="table-description">
        Informasi mahasiswa yang tersimpan di database.
    </p>

    {{-- PENCARIAN --}}
    <form action="{{ route('mahasiswa.index') }}"
          method="GET"
          class="search-box">

        <input
            type="text"
            name="search"
            value="{{ $search }}"
            placeholder="Cari NIM, nama, jurusan, atau email...">

        <button type="submit" class="btn btn-primary">
            Cari
        </button>

        <a href="{{ route('mahasiswa.index') }}"
           class="btn btn-secondary">
            Reset
        </a>
    </form>

    @if($mahasiswa->count() > 0)

        <div class="table-container">
            <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($mahasiswa as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->nim }}</td>

                            <td>
                                <strong>{{ $item->nama }}</strong>
                            </td>

                            <td>
                                <span class="badge-jurusan">
                                    {{ $item->jurusan }}
                                </span>
                            </td>

                            <td>{{ $item->email }}</td>

                            <td>{{ $item->no_hp ?: '-' }}</td>

                            <td>
                                <div class="actions">

                                    <a
                                        href="{{ route('mahasiswa.show', $item->id) }}"
                                        class="btn btn-primary">
                                        Detail
                                    </a>

                                    <a
                                        href="{{ route('mahasiswa.edit', $item->id) }}"
                                        class="btn btn-warning">
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('mahasiswa.destroy', $item->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    @else

        <div class="empty-state">
            <h3>Data Mahasiswa Belum Ada</h3>

            <p>
                @if($search)
                    Tidak ditemukan data yang cocok dengan pencarian "{{ $search }}".
                @else
                    Silakan tambahkan data mahasiswa terlebih dahulu.
                @endif
            </p>

            @if($search)
                <a href="{{ route('mahasiswa.index') }}"
                   class="btn btn-secondary">
                    Tampilkan Semua Data
                </a>
            @else
                <a href="{{ route('mahasiswa.create') }}"
                   class="btn btn-primary">
                    + Tambah Mahasiswa
                </a>
            @endif
        </div>

    @endif

</div>

@endsection
```