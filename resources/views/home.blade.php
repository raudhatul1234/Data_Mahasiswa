@extends('layouts.app')

@section('title', 'Dashboard - Kampus App')

@section('content')

<style>

    /* =========================
       DASHBOARD
    ========================= */

    .dashboard {
        display: grid;
        gap: 25px;
    }


    /* =========================
       HERO
    ========================= */

    .hero {
        background: linear-gradient(
            135deg,
            #2563eb,
            #1e40af
        );

        color: white;

        padding: 55px 40px;

        border-radius: 15px;

        text-align: center;
    }

    .hero h1 {
        font-size: 38px;
        margin-bottom: 15px;
    }

    .hero p {
        font-size: 17px;
        margin-bottom: 25px;
        opacity: 0.9;
    }

    .hero .btn {
        background: white;
        color: #2563eb;
        font-weight: bold;
    }

    .hero .btn:hover {
        background: #f1f5f9;
    }


    /* =========================
       STATISTIK
    ========================= */

    .stats {
        display: grid;

        grid-template-columns:
            repeat(4, 1fr);

        gap: 20px;
    }


    .stat-box {
        background: white;

        padding: 25px;

        border-radius: 12px;

        box-shadow:
            0 5px 20px
            rgba(0, 0, 0, 0.07);

        transition: 0.3s;
    }


    .stat-box:hover {
        transform: translateY(-5px);

        box-shadow:
            0 10px 25px
            rgba(0, 0, 0, 0.10);
    }


    .stat-icon {
        font-size: 32px;

        margin-bottom: 10px;
    }


    .stat-title {
        color: #64748b;

        font-size: 14px;

        margin-bottom: 5px;
    }


    .stat-number {
        font-size: 32px;

        font-weight: bold;

        color: #2563eb;
    }


    /* =========================
       INFORMATION CARD
    ========================= */

    .info-grid {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 20px;
    }


    .info-card {
        background: white;

        padding: 25px;

        border-radius: 12px;

        box-shadow:
            0 5px 20px
            rgba(0, 0, 0, 0.07);
    }


    .info-card .icon {
        font-size: 35px;

        margin-bottom: 15px;
    }


    .info-card h3 {
        margin-bottom: 10px;
    }


    .info-card p {
        color: #64748b;

        line-height: 1.6;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 1000px) {

        .stats {
            grid-template-columns:
                repeat(2, 1fr);
        }

        .info-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }

    }


    @media (max-width: 768px) {

        .stats {
            grid-template-columns: 1fr;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }

        .hero {
            padding: 40px 20px;
        }

        .hero h1 {
            font-size: 30px;
        }

    }

</style>


<div class="dashboard">


    {{-- =========================
         HERO
    ========================= --}}

    <div class="hero">

        <h1>
            Selamat Datang di Kampus App
        </h1>

        <p>
            Sistem informasi sederhana
            untuk mengelola data mahasiswa.
        </p>

        <a
            href="{{ route('mahasiswa.index') }}"
            class="btn">

            Kelola Data Mahasiswa

        </a>

    </div>


    {{-- =========================
         STATISTIK
    ========================= --}}

    <div class="stats">


        {{-- TOTAL MAHASISWA --}}

        <div class="stat-box">

            <div class="stat-icon">
                🎓
            </div>

            <div class="stat-title">
                Total Mahasiswa
            </div>

            <div class="stat-number">

                {{ $totalMahasiswa }}

            </div>

        </div>


        {{-- DATA CRUD --}}

        <div class="stat-box">

            <div class="stat-icon">
                📝
            </div>

            <div class="stat-title">
                Sistem CRUD
            </div>

            <div class="stat-number">
                Aktif
            </div>

        </div>


        {{-- DATABASE --}}

        <div class="stat-box">

            <div class="stat-icon">
                🗄️
            </div>

            <div class="stat-title">
                Database
            </div>

            <div class="stat-number">
                MySQL
            </div>

        </div>


        {{-- FRAMEWORK --}}

        <div class="stat-box">

            <div class="stat-icon">
                ⚡
            </div>

            <div class="stat-title">
                Framework
            </div>

            <div class="stat-number">
                Laravel
            </div>

        </div>


    </div>


    {{-- =========================
         INFORMATION
    ========================= --}}

    <div class="info-grid">


        {{-- DATA MAHASISWA --}}

        <div class="info-card">

            <div class="icon">
                👨‍🎓
            </div>

            <h3>
                Data Mahasiswa
            </h3>

            <p>

                Menyimpan dan mengelola
                informasi mahasiswa seperti
                NIM, nama, jurusan, email,
                dan nomor HP.

            </p>

        </div>


        {{-- CRUD --}}

        <div class="info-card">

            <div class="icon">
                🔄
            </div>

            <h3>
                CRUD
            </h3>

            <p>

                Sistem menyediakan fungsi
                tambah, lihat, edit, dan
                hapus data mahasiswa.

            </p>

        </div>


        {{-- DATABASE --}}

        <div class="info-card">

            <div class="icon">
                💾
            </div>

            <h3>
                Database MySQL
            </h3>

            <p>

                Data disimpan secara
                permanen menggunakan
                database MySQL melalui
                Laravel Eloquent.

            </p>

        </div>


    </div>


</div>

@endsection