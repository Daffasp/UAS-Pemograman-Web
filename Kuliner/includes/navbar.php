<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Kuliner</title>
    <!-- Tambahkan jQuery sebelum Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Styling tambahan untuk Navbar */
        .navbar {
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand:hover {
            color: #FFC107;
        }

        .nav-link {
            color: white !important;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #FFC107 !important;
            transform: scale(1.1);
        }

        .dropdown-menu {
            background: rgba(0, 0, 0, 0.8);
            border: none;
        }

        .dropdown-item {
            color: white !important;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: #FFC107;
            color: black !important;
        }

        .btn-outline-light {
            border-color: white;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background: white;
            color: black;
        }

        .navbar-toggler {
            border-color: white;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        /* Tambahan styling untuk dropdown */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="?page=home">Kuliner</a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=makanan">Makanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=minuman">Minuman</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a 
                            class="nav-link dropdown-toggle" 
                            href="#" 
                            id="navbarDropdown"
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=about">About Us</a></li>
                            <li><a class="dropdown-item" href="?page=contact">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="?page=login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tambahkan script Bootstrap di akhir body -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Tambahkan script untuk mengaktifkan dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Aktifkan semua dropdowns
            var dropdowns = document.querySelectorAll('.dropdown-toggle');
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('click', function(e) {
                    e.preventDefault();
                    var dropdownMenu = this.nextElementSibling;
                    if (dropdownMenu.style.display === 'block') {
                        dropdownMenu.style.display = 'none';
                    } else {
                        dropdownMenu.style.display = 'block';
                    }
                });
            });

            // Tutup dropdown ketika klik di luar
            document.addEventListener('click', function(e) {
                if (!e.target.matches('.dropdown-toggle')) {
                    var dropdowns = document.querySelectorAll('.dropdown-menu');
                    dropdowns.forEach(function(dropdown) {
                        dropdown.style.display = 'none';
                    });
                }
            });
        });
    </script>
</body>
</html>