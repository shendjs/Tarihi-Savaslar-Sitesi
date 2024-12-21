<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savaş Ekle</title>
    <style>
        /* Genel Ayarlar */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #6c5ce7, #74b9ff);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Konteyneri */
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 400px;
            max-width: 90%;
        }

        /* Başlık */
        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Etiket Stili */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        /* Input ve Textarea Stili */
        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        textarea {
            resize: none;
        }

        /* Gönder Butonu */
        input[type="submit"] {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
            transform: translateY(-2px);
        }

        input[type="submit"]:active {
            transform: translateY(0);
        }

        /* Geri Dön Linki */
        .back-link {
            text-align: center;
            margin-top: 15px;
        }

        .back-link a {
            color: #6c5ce7;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Savaş Ekle</h2>
        <form method="post" action="<?= base_url('war/add') ?>">
            <?= csrf_field() ?>
            <label for="war_name">Savaş Adı:</label>
            <input type="text" id="war_name" name="war_name" placeholder="Savaş adını giriniz" required>
            
            <label for="war_description">Savaş Açıklaması:</label>
            <textarea id="war_description" name="war_description" placeholder="Savaş açıklamasını yazınız" rows="5" required></textarea>
            
            <label for="war_image">Savaş Görseli (URL):</label>
            <input type="text" id="war_image" name="war_image" placeholder="Görsel URL'sini giriniz" required>
            
            <input type="submit" value="Savaş Ekle">
        </form>
        <div class="back-link">
            <a href="<?= base_url('war-list') ?>">&larr; Geri Dön</a>
        </div>
    </div>
</body>
</html>
