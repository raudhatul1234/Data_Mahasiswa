@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')

<div class="card">

    <h2>Detail Mahasiswa</h2>

    <p style="margin:8px 0 25px; color:#64748b;">
        Informasi lengkap data mahasiswa.
    </p>


    <table class="table">

        <tr>
            <th width="200">NIM</th>
            <td>{{ $mahasiswa->nim }}</td>
        </tr>

        <tr>
            <th>Nama</th>
            <td>{{ $mahasiswa->nama }}</td>
        </tr>

        <tr>
            <th>Jurusan</th>
            <td>{{ $mahasiswa->jurusan }}</td>
        </tr>

        <tr>
            <th>Email</th>
            <td>{{ $mahasiswa->email }}</td>
        </tr>

        <tr>
            <th>No HP</th>
            <td>{{ $mahasiswa->no_hp ?? '-' }}</td>
        </tr>

        <tr>
            <th>Dibuat</th>
            <td>{{ $mahasiswa->created_at->format('d-m-Y H:i') }}</td>
        </tr>

    </table>


    <div style="margin-top:20px;">

        <a
            href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
            class="btn btn-warning">

            Edit

        </a>


        <a
            href="{{ route('mahasiswa.index') }}"
            class="btn btn-secondary">

            Kembali

        </a>

    </div>

</div>

@endsection