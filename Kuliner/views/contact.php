<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Kuliner Nusantara</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Contact Background */
.contact-bg {
    background-color: #f8f5f0;
    background-size: cover;
    background-position: center;
    position: relative;
    text-align: center;
    color: white;
}


        .contact-overlay {
            background-color: rgba(0, 0, 0, 0.6);
            background-image: url('views/makananbck.jpg');
            padding: 80px 0;
        }

        .display-4 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .lead {
            font-size: 1.2rem;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }

        .container-fluid {
            width: 100%;
        }

        /* Grid System */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -15px;
        }

        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 15px;
        }

        .col-md-12 {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 15px;
        }

        @media (max-width: 768px) {
            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        /* Form Styles */
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            color: #fff;
            background-color: #007bff;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out;
        }

        .btn:hover {
            background-color: #0069d9;
        }

        /* Contact Icon */
        .contact-icon {
            font-size: 3rem;
            color: #FFA500;
            margin-bottom: 15px;
            margin-right: 15px;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        /* Table Styles */
        .table {
            width: 100%;
            margin-bottom: 1rem;
            border-collapse: collapse;
        }

        .table tbody tr {
            border-top: 1px solid #dee2e6;
        }

        .table td {
            padding: 0.75rem;
            vertical-align: top;
        }

        /* Map Responsive */
        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }

        h2 {
            margin-bottom: 1rem;
        }

        .text-center {
            text-align: center;
        }

        .my-5 {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .mt-5 {
            margin-top: 3rem;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <!-- Banner Kontak -->
    <header class="container-fluid contact-bg text-center">
        <div class="contact-overlay">
            <h1 class="display-4">Hubungi Kami</h1>
            <p class="lead">Ada pertanyaan tentang kuliner Nusantara? Kami siap membantu!</p>
        </div>
    </header>

    <!-- Konten Kontak -->
    <main class="container my-5">
        <div class="row">
            <!-- Formulir Kontak -->
            <div class="col-md-6">
                <h2>Kirim Pesan</h2>
                <form action="proses_kontak.php" method="POST">
                    <div>
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="telepon" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="telepon" name="telepon">
                    </div>
                    <div>
                        <label for="pesan" class="form-label">Pesan Anda</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim Pesan</button>
                </form>
            </div>

            <!-- Informasi Kontak -->
            <div class="col-md-6">
                <h2>Informasi Kontak</h2>
                <div>
                    <div class="contact-info-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h5>Alamat</h5>
                            <p>
                                <a href="https://www.google.com/maps?q=Universitas+Pelita+Bangsa,+Cikarang,+Indonesia"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    Universitas Pelita Bangsa, Cikarang, Indonesia
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-icon">📞</div>
                    <div>
                        <h5>Telepon</h5>
                        <p>
                            <a href="tel:+6281280514307" target="_blank" rel="noopener noreferrer">
                                081354153017
                            </a>
                        </p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-icon">✉</div>
                    <div>
                        <h5>Email</h5>
                        <p>
                            <a href="mailto:mr.xarifmacan@gmail.com" target="_blank" rel="noopener noreferrer">
                                dappasadewaputra@gmail.com
                            </a>
                        </p>
                    </div>
                </div>

            </div>

            <!-- Jam Operasional -->
            <div>
                <h5>Jam Operasional</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Senin - Jumat</td>
                            <td>09:00 - 17:00 WIB</td>
                        </tr>
                        <tr>
                            <td>Sabtu</td>
                            <td>10:00 - 14:00 WIB</td>
                        </tr>
                        <tr>
                            <td>Minggu</td>
                            <td>Tutup</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>


</html>