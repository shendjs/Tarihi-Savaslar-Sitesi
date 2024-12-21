<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli</title>
    <style>
        /* Genel Stiller */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #6c5ce7, #74b9ff);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Panel Kutusu */
        .container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        /* Başlık */
        .container h1 {
            color: #2d3436;
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        /* Menü Listesi */
        ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        ul li {
            margin: 15px 0;
        }

        ul li a {
            text-decoration: none;
            color: #6c5ce7;
            font-weight: bold;
            font-size: 1em;
            transition: color 0.3s ease;
        }

        ul li a:hover {
            color: #74b9ff;
        }

        /* Açıklama */
        p {
            color: #636e72;
            font-size: 0.9em;
            margin-top: 15px;
        }

        /* Çıkış Butonu */
        .logout-btn {
            display: inline-block;
            padding: 12px 20px;
            margin-top: 20px;
            background-color: #d63031;
            color: white;
            font-size: 0.9em;
            font-weight: bold;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .logout-btn:hover {
            background-color: #e74c3c;
            transform: translateY(-2px);
        }

        .logout-btn:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hoş Geldiniz, <?= session('username') ?>!</h1>
        <ul>
            <li><a href="<?= base_url('dashboard') ?>">Anasayfa</a></li>
            <li><a href="<?= base_url('add-war') ?>">Savaş Ekle</a></li>
            <li><a href="<?= base_url('war-list') ?>">Savaşlar</a></li>
        </ul>
        <p>Yönetim paneline hoş geldiniz. Bu panelden savaşları ekleyebilir, düzenleyebilir ve görüntüleyebilirsiniz.</p>
        <a href="<?= base_url('logout') ?>" class="logout-btn">Çıkış Yap</a>
    </div>
</body>
</html>
