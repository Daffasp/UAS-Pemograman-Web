<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Not Found</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4, #45B7D1, #96E6B3);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* Container Styles */
        .container {
            position: relative;
            text-align: center;
            padding: 40px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        }

        /* Glowing Effect */
        .container::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            border-radius: 20px;
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4, #45B7D1, #96E6B3);
            z-index: -1;
            filter: blur(20px);
            animation: glowing 10s linear infinite;
        }

        @keyframes glowing {
            0% { filter: blur(20px) hue-rotate(0deg); }
            100% { filter: blur(20px) hue-rotate(360deg); }
        }

        /* Error Text Styles */
        .error-text {
            font-size: 120px;
            font-weight: bold;
            margin: 0;
            background: linear-gradient(to right, #FF6B6B, #4ECDC4, #45B7D1);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* Message Styles */
        .message {
            font-size: 24px;
            color: white;
            margin-top: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            animation: fadeIn 2s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Button Styles */
        .back-button {
            margin-top: 30px;
            padding: 15px 30px;
            font-size: 18px;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4);
            transition: transform 0.3s, box-shadow 0.3s;
            animation: fadeIn 2s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .back-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            background: linear-gradient(45deg, #4ECDC4, #FF6B6B);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="error-text">
            <span>4</span>
            <span>0</span>
            <span>4</span>
        </h1>
        <p class="message">Not Founding</p>
        <button class="back-button" onclick="history.back()">Kembali ke Halaman Utama</button>
    </div>
</body>
</html>
