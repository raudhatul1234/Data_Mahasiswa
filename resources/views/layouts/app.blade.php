<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Kampus App')
    </title>


    <style>

        /* ========================================
           RESET
        ======================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f4f7fb;

            color: #1e293b;

        }


        /* ========================================
           LAYOUT
        ======================================== */

        .app {

            display: flex;

            min-height: 100vh;

        }


        /* ========================================
           SIDEBAR
        ======================================== */

        .sidebar {

            width: 240px;

            min-height: 100vh;

            background:
                linear-gradient(
                    180deg,
                    #173b70,
                    #0f2b52
                );

            color: white;

            position: fixed;

            left: 0;

            top: 0;

            bottom: 0;

            z-index: 100;

        }


        /* ========================================
           LOGO
        ======================================== */

        .sidebar-logo {

            height: 70px;

            display: flex;

            align-items: center;

            padding: 0 22px;

            font-size: 20px;

            font-weight: bold;

            border-bottom:
                1px solid
                rgba(255,255,255,0.1);

        }


        .sidebar-logo span {

            margin-right: 10px;

            font-size: 24px;

        }


        /* ========================================
           MENU
        ======================================== */

        .sidebar-menu {

            padding: 20px 12px;

        }


        .menu-title {

            color:
                rgba(255,255,255,0.5);

            font-size: 11px;

            text-transform: uppercase;

            padding:
                0 12px 10px;

            letter-spacing: 1px;

        }


        .sidebar-menu a {

            display: flex;

            align-items: center;

            gap: 12px;

            color:
                rgba(255,255,255,0.85);

            text-decoration: none;

            padding: 12px 14px;

            margin-bottom: 6px;

            border-radius: 8px;

            font-size: 14px;

            transition: 0.2s;

        }


        .sidebar-menu a:hover {

            background:
                rgba(255,255,255,0.1);

            color: white;

        }


        .sidebar-menu a.active {

            background: #2563eb;

            color: white;

            box-shadow:
                0 4px 10px
                rgba(37,99,235,0.3);

        }


        .menu-icon {

            width: 20px;

            text-align: center;

            font-size: 16px;

        }


        /* ========================================
           MAIN
        ======================================== */

        .main {

            margin-left: 240px;

            width: calc(100% - 240px);

            min-height: 100vh;

        }


        /* ========================================
           TOPBAR
        ======================================== */

        .topbar {

            height: 70px;

            background: white;

            border-bottom:
                1px solid #e5e7eb;

            display: flex;

            align-items: center;

            justify-content: flex-end;

            padding: 0 35px;

        }


        .user-info {

            display: flex;

            align-items: center;

            gap: 10px;

            color: #475569;

            font-size: 14px;

        }


        .user-avatar {

            width: 32px;

            height: 32px;

            border-radius: 50%;

            background: #e0ecff;

            display: flex;

            align-items: center;

            justify-content: center;

        }


        /* ========================================
           CONTENT
        ======================================== */

        .container {

            width: 100%;

            max-width: 1400px;

            margin: 0 auto;

            padding: 30px 35px;

        }


        /* ========================================
           CARD
        ======================================== */

        .card {

            background: white;

            padding: 25px;

            border-radius: 10px;

            box-shadow:
                0 2px 10px
                rgba(15,23,42,0.05);

            border:
                1px solid #edf1f5;

        }


        /* ========================================
           BUTTON
        ======================================== */

        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 5px;

            padding: 9px 15px;

            border-radius: 6px;

            text-decoration: none;

            border: none;

            cursor: pointer;

            font-size: 13px;

            font-weight: 500;

            transition: 0.2s;

        }


        .btn-primary {

            background: #2563eb;

            color: white;

        }


        .btn-primary:hover {

            background: #1d4ed8;

        }


        .btn-warning {

            background: #f59e0b;

            color: white;

        }


        .btn-warning:hover {

            background: #d97706;

        }


        .btn-danger {

            background: #ef4444;

            color: white;

        }


        .btn-danger:hover {

            background: #dc2626;

        }


        .btn-secondary {

            background: #e2e8f0;

            color: #475569;

        }


        .btn-secondary:hover {

            background: #cbd5e1;

        }


        /* ========================================
           TABLE
        ======================================== */

        .table {

            width: 100%;

            border-collapse: collapse;

            margin-top: 20px;

        }


        .table th {

            background: #f8fafc;

            color: #475569;

            font-size: 12px;

            font-weight: 600;

            padding: 13px;

            text-align: left;

            border-bottom:
                1px solid #e2e8f0;

        }


        .table td {

            padding: 13px;

            font-size: 13px;

            border-bottom:
                1px solid #edf2f7;

            color: #475569;

        }


        .table tbody tr:hover {

            background: #f8fafc;

        }


        /* ========================================
           ACTION
        ======================================== */

        .actions {

            display: flex;

            gap: 5px;

            flex-wrap: wrap;

        }


        /* ========================================
           FORM
        ======================================== */

        .form-group {

            margin-bottom: 18px;

        }


        .form-group label {

            display: block;

            margin-bottom: 7px;

            font-size: 13px;

            font-weight: 600;

            color: #334155;

        }


        .form-control {

            width: 100%;

            padding: 11px 13px;

            border:
                1px solid #cbd5e1;

            border-radius: 7px;

            font-size: 14px;

            outline: none;

            transition: 0.2s;

        }


        .form-control:focus {

            border-color: #2563eb;

            box-shadow:
                0 0 0 3px
                rgba(37,99,235,0.1);

        }


        /* ========================================
           ALERT
        ======================================== */

        .alert {

            padding: 13px 16px;

            margin-bottom: 20px;

            border-radius: 7px;

            background: #dcfce7;

            color: #166534;

            border:
                1px solid #bbf7d0;

            font-size: 14px;

        }


        /* ========================================
           ERROR
        ======================================== */

        .error {

            color: #dc2626;

            margin-top: 5px;

            font-size: 13px;

        }


        /* ========================================
           RESPONSIVE
        ======================================== */

        @media (max-width: 768px) {

            .sidebar {

                width: 70px;

            }


            .sidebar-logo {

                justify-content: center;

                padding: 0;

                font-size: 0;

            }


            .sidebar-logo span {

                margin: 0;

                font-size: 23px;

            }


            .sidebar-menu a {

                justify-content: center;

                padding: 12px;

            }


            .sidebar-menu a span:not(.menu-icon) {

                display: none;

            }


            .menu-title {

                display: none;

            }


            .main {

                margin-left: 70px;

                width:
                    calc(100% - 70px);

            }


            .container {

                padding: 20px 15px;

            }


            .topbar {

                padding: 0 15px;

            }


            .table {

                min-width: 900px;

            }

        }

    </style>

</head>


<body>


<div class="app">


    {{-- ========================================
         SIDEBAR
    ======================================== --}}

    <aside class="sidebar">


        <div class="sidebar-logo">

            <span>
                🎓
            </span>

            Kampus App

        </div>


        <div class="sidebar-menu">


            <div class="menu-title">

                Menu

            </div>


            {{-- HOME --}}

            <a
                href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'active' : '' }}">

                <span class="menu-icon">
                    🏠
                </span>

                <span>
                    Home
                </span>

            </a>


            {{-- MAHASISWA --}}

            <a
                href="{{ route('mahasiswa.index') }}"
                class="{{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}">

                <span class="menu-icon">
                    👥
                </span>

                <span>
                    Mahasiswa
                </span>

            </a>


        </div>

    </aside>



    {{-- ========================================
         MAIN
    ======================================== --}}

    <main class="main">


        {{-- TOPBAR --}}

        <header class="topbar">

            <div class="user-info">

                <div class="user-avatar">

                    👤

                </div>

                <span>
                    Admin
                </span>

            </div>

        </header>


        {{-- CONTENT --}}

        <div class="container">


            @if(session('success'))

                <div class="alert">

                    {{ session('success') }}

                </div>

            @endif


            @yield('content')


        </div>


    </main>


</div>


</body>

</html>