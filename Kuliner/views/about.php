<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Kuliner Nusantara</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .container-fluid {
            width: 100%;
        }

        .about-bg {
            background: linear-gradient(rgba(249, 246, 246, 0.44), rgba(252, 246, 246, 0.18)), 
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .about-overlay {
            text-align: center;
            padding: 40px;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            backdrop-filter: blur(5px);
            width: 80%;
            max-width: 800px;
        }

        .display-4 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .lead {
            font-size: 1.5rem;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Rest of the styles remain the same */
        .row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
            margin-bottom: 50px;
        }

        @media (min-width: 768px) {
            .row {
                grid-template-columns: repeat(2, 1fr);
            }

            .mission-row {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .mission-section {
            text-align: center;
        }

        .mission-icon {
            font-size: 4rem;
            margin-bottom: 15px;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
        }

        h1, h2, h3, h4 {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <!-- Banner About -->
    <header class="about-bg">
        <div class="about-overlay">
            <h1 class="display-4">Tentang Kuliner Nusantara</h1>
            <p class="lead">Melestarikan dan Memperkenalkan Kekayaan Kuliner Indonesia</p>
        </div>
    </header>

    <!-- Rest of the HTML remains the same -->
    <main class="container my-5">
        <section class="row">
            <div>
                <h2 class="mb-4">Cerita Kami</h2>
                <p>Kami hadir untuk merayakan kekayaan kuliner Nusantara yang penuh dengan cita rasa dan cerita. Dari Sabang sampai Merauke, setiap hidangan adalah warisan budaya yang kami jaga dengan bangga. Dengan bahan lokal terbaik dan resep otentik, kami mengajak Anda menikmati keindahan Indonesia melalui setiap gigitan.</p>
            </div>
            <div>
                <img src="views/kuliner-image.webp" class="img-fluid" alt="Cerita Kami">
            </div>
        </section>

        <section class="row mission-row mission-section">
            <div>
                <div class="mission-icon">🏆</div>
                <h3>Misi Kami</h3>
                <p>MMelestarikan warisan kuliner Nusantara.</p>
            </div>
            <div>
                <div class="mission-icon">👀</div>
                <h3>Visi Kami</h3>
                <p>Menjadi platform terdepan dalam eksplorasi, edukasi, dan apresiasi kuliner nusantara.</p>
            </div>
            <div>
                <div class="mission-icon">❤</div>
                <h3>Nilai Kami</h3>
                <p>Keaslian, keberagaman, keberlanjutan, dan penghormatan terhadap warisan kuliner Indonesia.</p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Kuliner Nusantara. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>