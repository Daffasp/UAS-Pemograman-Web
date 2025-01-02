<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesona Kuliner Nusantara</title>
    <link href="views//fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Caveat:wght@600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color:rgb(10, 198, 240);
            --secondary-color:rgb(0, 0, 0);
            --accent-color: #E67E22;
            --text-color:rgb(155, 1, 244);
            --background-color:rgba(3, 214, 237, 0.9);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, var(--background-color),rgb(250, 6, 234));
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .culinary-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            background: rgba(8, 231, 247, 0.73);
            backdrop-filter: (1px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(5, 169, 252, 0.53);
        }

        /* Banner dengan efek parallax */
        .banner {
            position: relative;
            width: 100%;
            height: 70vh;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(6, 244, 200, 0.65);
            margin-bottom: 4rem;
            perspective: 1000px;
        }

        .banner-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition:
                opacity 1s ease-in-out,
                transform 1s ease-in-out;
            transform: scale(1.1) translateZ(-50px);
        }

        .banner-image.active {
            opacity: 1;
            transform: scale(1) translateZ(0);
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(5, 213, 245, 0.68), rgba(9, 222, 245, 0.59));
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .banner-overlay h1 {
            font-family: 'Caveat', cursive;
            font-size: 5rem;
            text-shadow: 3px 3px 10px rgba(6, 226, 250, 0.55);
            letter-spacing: 2px;
        }

        /* Animasi section title */
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
            font-weight: 700;
        }

        .section-title::before,
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            height: 4px;
            background-color: var(--accent-color);
            transition: width 0.5s ease;
        }

        .section-title::before {
            left: 50%;
            width: 0;
            transform: translateX(-50%);
        }

        .section-title:hover::before {
            width: 100px;
        }

        /* Grid kuliner dengan efek menarik */
        .culinary-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2.5rem;
        }

        .culinary-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(248, 2, 101, 0.72);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .culinary-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }

        .culinary-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgb(255, 4, 75);
        }

        .culinary-card:hover::before {
            transform: scaleX(1);
            transform-origin: left;
        }

        .culinary-card-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .culinary-card:hover .culinary-card-image {
            transform: scale(1.1);
        }

        .culinary-card-content {
            padding: 1.5rem;
            background: linear-gradient(to right,rgb(252, 0, 197),rgb(193, 11, 248));
        }

        .culinary-card-title {
            color: var(--primary-color);
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .culinary-card:hover .culinary-card-title {
            color: var(--accent-color);
        }

        .culinary-card-location {
            color: var(--secondary-color);
            display: flex;
            align-items: center;
            font-size: 1rem;
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .culinary-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .culinary-grid {
                grid-template-columns: 1fr;
            }

            .banner-overlay h1 {
                font-size: 3rem;
            }
        }
    </style>
</head>

<body>
    <div class="culinary-container">
        <!-- Banner Slider -->
        <div class="banner">
            <div class="banner-image active" style="background-image: url('https://via.placeholder.com/1500x500?text=Sate+Ayam')"></div>
            <div class="banner-image" style="background-image: url('https://via.placeholder.com/1500x500?text=Nasi+Goreng')"></div>
            <div class="banner-image" style="background-image: url('https://via.placeholder.com/1500x500?text=Rendang')"></div>

            <div class="banner-overlay">
                <h1>Pesona Kuliner Nusantara</h1>
            </div>
        </div>
    </div>

    <style>
        /* Reset Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .culinary-container {
            position: relative;
        }

        .banner {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .banner-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .banner-image.active {
            opacity: 1;
        }

        .banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('views/kuliner.jpg'); /* Ganti path/to/your-image.jpg dengan path gambar Anda */
    background-size: cover; /* Membuat gambar menutupi seluruh area */
    background-position: center; /* Memusatkan gambar */
    background-color: rgba(8, 200, 248, 0.77); 
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
}


        .banner-overlay h1 {
            font-size: 3rem;
        }
    </style>

    <script>
        // Banner slider functionality
        let currentIndex = 0;
        const banners = document.querySelectorAll('views://background2.png');

        function showNextBanner() {
            banners[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % banners.length;
            banners[currentIndex].classList.add('active');
        }

        setInterval(showNextBanner, 3000); // Change banner every 3 seconds
    </script>
</body>


        <!-- Makanan Section -->
        <h2 class="section-title">Hidangan Tradisional</h2>
        <div class="culinary-grid">
            <div class="culinary-card">
                <img src="images/makanan/1.jpg" alt="Rendang" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Rendang</h3>
                    <p class="culinary-card-location">📍 Sumatera Barat</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/makanan/2.jpg" alt="Gudeg" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Gudeg</h3>
                    <p class="culinary-card-location">📍 Yogyakarta</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/makanan/3.jpg" alt="Pempek" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Pempek</h3>
                    <p class="culinary-card-location">📍 Palembang</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/makanan/4.jpg" alt="Sate" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Sate</h3>
                    <p class="culinary-card-location">📍 Madura</p>
                </div>
            </div>
        </div>

        <!-- Minuman Section -->
        <h2 class="section-title">Minuman Tradisional</h2>
        <div class="culinary-grid">
            <div class="culinary-card">
                <img src="images/minuman/1.jpg" alt="Es Cendol" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Es Cendol</h3>
                    <p class="culinary-card-location">📍 Jawa Barat</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/minuman/2.jpg" alt="Wedang Ronde" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Wedang Ronde</h3>
                    <p class="culinary-card-location">📍 Jawa Tengah</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/minuman/3.jpg" alt="Bajigur" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Bajigur</h3>
                    <p class="culinary-card-location">📍 Jawa Barat</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/minuman/4.jpg" alt="Es Doger" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Es Doger</h3>
                    <p class="culinary-card-location">📍 Jawa Barat</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const bannerImages = document.querySelectorAll('.banner-image');
            let currentBanner = 0;

            setInterval(() => {
                bannerImages[currentBanner].classList.remove('active');
                currentBanner = (currentBanner + 1) % bannerImages.length;
                bannerImages[currentBanner].classList.add('active');
            }, 5000);
        });
    </script>
</body>

</html>