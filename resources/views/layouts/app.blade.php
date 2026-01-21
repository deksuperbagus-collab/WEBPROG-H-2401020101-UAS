<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Sistem Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">Absensi Karyawan</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="/karyawan">Karyawan</a></li>
            <li class="nav-item"><a class="nav-link" href="/absensi">Absensi</a></li>
            <li class="nav-item">
                <form action="/logout" method="POST">@csrf
                    <button class="btn btn-sm btn-danger">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>


<div class="container mt-4">
    @yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>