<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventaris App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            position: fixed;
            top: 0;
            bottom: 0;
            left: -250px;
            transition: all 0.3s ease;
        }
        .sidebar.show {
            left: 0;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
        }
        .content {
            margin-left: 0;
            padding: 20px;
            width: 100%;
            transition: margin-left 0.3s ease;
        }
        .content.shift {
            margin-left: 250px;
        }
        @media (min-width: 768px) {
            .sidebar {
                left: 0;
            }
            .content {
                margin-left: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3" id="sidebar">
        <h4 class="text-center mb-4">Inventaris App</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a class="nav-link active" aria-current="page" href="{{ route('landing_page') }}">
                    <i class="bi bi-house-door"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#produkMenu" aria-expanded="false">
                    <i class="bi bi-box"></i> Barang
                </a>
                <ul class="collapse list-unstyled ps-3" id="produkMenu">
                    <li><a class="nav-link" href="{{ route('inventari.home') }}">Data barang</a></li>
                    <li><a class="nav-link" href="{{ route('inventari.create') }}">Tambah barang</a></li>
                </ul>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{route('user.home')}}">
                    <i class="bi bi-person-add"></i> Kelola akun
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content" id="content">
        <button class="btn btn-primary mb-3 d-md-none" id="toggleSidebar">
            <i class="bi bi-list"></i> Menu
        </button>
        <div class="container mt-5">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        // Toggle Sidebar on small screens
        document.getElementById('toggleSidebar').addEventListener('click', function () {
            var sidebar = document.getElementById('sidebar');
            var content = document.getElementById('content');
            sidebar.classList.toggle('show');
            content.classList.toggle('shift');
        });
    </script>

    @stack('script')
</body>
</html>
