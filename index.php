<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, Selamat Datang di WEB 2</title>
    <style>
        /* Background gradient animasi */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2, #89f7fe, #66a6ff);
            background-size: 400% 400%;
            animation: gradientShift 10s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Kartu utama */
        .container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
            text-align: center;
            color: #fff;
            max-width: 500px;
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        h2 {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 30px;
            color: #e0e0e0;
        }

        p {
            font-size: 16px;
            margin: 10px 0;
            line-height: 1.6;
        }

        .highlight {
            color: #ffd369;
            font-weight: 600;
        }

        .footer {
            margin-top: 25px;
            font-style: italic;
            font-size: 15px;
            color: #cfcfcf;
        }

        /* Tombol animasi kecil */
        .button {
            margin-top: 20px;
            padding: 10px 25px;
            border: none;
            border-radius: 30px;
            background: linear-gradient(45deg, #ff9a9e, #fad0c4);
            color: #333;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(255,255,255,0.6);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, Selamat Datang di WEB 2</h1>
        <h2>App 1 berhasil dijalankan di port 2000 🚀</h2>

        <p>Perkenalkan saya <span class="highlight">Shelina Disty Fibriani</span><br>
        dengan NIM <span class="highlight">H1101231005</span>.</p>

        <button class="button" onclick="alert('Terima kasih sudah berkunjung! 💕')">Klik Aku!</button>

        <div class="footer">Thankyou 🌸</div>
    </div>
</body>
</html>
