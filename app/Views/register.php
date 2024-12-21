<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <style>
        /* Genel Stiller */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #81ecec, #74b9ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Kayıt Kutusu Stilleri */
        .register-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        /* Başlık */
        .register-container h2 {
            font-size: 1.8em;
            color: #2d3436;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Form Stilleri */
        .register-container form {
            display: flex;
            flex-direction: column;
        }

        .register-container label {
            font-size: 0.9em;
            color: #636e72;
            text-align: left;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .register-container input[type="text"],
        .register-container input[type="password"] {
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #dcdde1;
            border-radius: 6px;
            font-size: 1em;
            background-color: #f7f7f7;
            transition: border-color 0.3s ease;
        }

        .register-container input[type="text"]:focus,
        .register-container input[type="password"]:focus {
            border-color: #74b9ff;
            outline: none;
            background-color: #ffffff;
        }

        /* Buton Stili */
        .register-container input[type="submit"] {
            padding: 12px;
            background-color: #00cec9;
            color: white;
            font-size: 1em;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .register-container input[type="submit"]:hover {
            background-color: #81ecec;
            transform: translateY(-2px);
        }

        .register-container input[type="submit"]:active {
            transform: translateY(0);
        }

        /* Hata Mesajı */
        .message {
            background-color: #ffe6e6;
            color: #e74c3c;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 0.9em;
            text-align: center;
        }

        /* Alt Bağlantı */
        .register-container .back-link {
            margin-top: 15px;
        }

        .register-container .back-link a {
            font-size: 0.9em;
            color: #00cec9;
            text-decoration: none;
        }

        .register-container .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Kayıt Ol</h2>
        <?php if (!empty($message)): ?>
            <div class="message"><?= esc($message) ?></div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('register') ?>">
            <?= csrf_field() ?>
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" placeholder="Kullanıcı adınızı giriniz" required>

            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" placeholder="Şifrenizi giriniz" required>

            <input type="submit" value="Kayıt Ol">
        </form>
        <div class="back-link">
            <a href="<?= base_url('/') ?>">← Ana Sayfaya Dön</a>
        </div>
    </div>
</body>
</html>
