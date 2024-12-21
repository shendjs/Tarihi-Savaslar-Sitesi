<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <style>
        /* Genel Stiller */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #74b9ff, #a29bfe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Giriş Kutusu Stilleri */
        .login-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        /* Başlık */
        .login-container h2 {
            font-size: 1.8em;
            color: #2d3436;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Form Stilleri */
        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container label {
            font-size: 0.9em;
            color: #636e72;
            text-align: left;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #dcdde1;
            border-radius: 6px;
            font-size: 1em;
            background-color: #f7f7f7;
            transition: border-color 0.3s ease;
        }

        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            border-color: #74b9ff;
            outline: none;
            background-color: #ffffff;
        }

        /* Buton Stili */
        .login-container input[type="submit"],
        .login-container .register-btn {
            padding: 12px;
            background-color: #0984e3;
            color: white;
            font-size: 1em;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-bottom: 10px;
        }

        .login-container input[type="submit"]:hover,
        .login-container .register-btn:hover {
            background-color: #74b9ff;
            transform: translateY(-2px);
        }

        .login-container input[type="submit"]:active,
        .login-container .register-btn:active {
            transform: translateY(0);
        }

        /* Hata Mesajı */
        .error {
            background-color: #ffe6e6;
            color: #e74c3c;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 0.9em;
            text-align: left;
        }

        .error ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        /* Alt Bağlantı */
        .login-container .back-link {
            margin-top: 15px;
        }

        .login-container .back-link a {
            font-size: 0.9em;
            color: #0984e3;
            text-decoration: none;
        }

        .login-container .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Giriş Yap</h2>
        <?php if (!empty($errors)): ?>
            <div class='error'>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('login') ?>">
            <?= csrf_field() ?>
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" placeholder="Kullanıcı adınızı giriniz" required>

            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" placeholder="Şifrenizi giriniz" required>

            <input type="submit" value="Giriş Yap">
        </form>
        <button class="register-btn" onclick="window.location.href='<?= base_url('register') ?>'">Kayıt Ol</button>
        <div class="back-link">
            <a href="<?= base_url('/') ?>">← Ana Sayfaya Dön</a>
        </div>
    </div>
</body>
</html>
