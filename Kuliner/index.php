<?php require "includes/pageHeader.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kuliner Tradisional</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4, #45B7D1, #96E6B3);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* Header Styles */
        header {
            text-align: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            max-width: 90%;
            position: relative;
        }

        header::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4, #45B7D1, #96E6B3);
            border-radius: 10px;
            z-index: -1;
            filter: blur(10px);
        }

        h1 {
            margin: 0;
            font-size: 36px;
            font-weight: bold;
            color: white;
            background: linear-gradient(to right, #FF6B6B, #4ECDC4);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: fadeIn 2s;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Daftar Kuliner Tradisional</h1>
    </header>
</body>
</html>

<?php require "includes/navbar.php" ?>
<div class="container mt-4 mb-5">
<?php require "includes/konten.php" ?>
</div>
<footer>
<div class="text-bg-dark text-center p-2">
Pemrograman Web 1 @ <?= date("Y") ?>
</div>
</footer>
<?php require "includes/pageFooter.php" ?>