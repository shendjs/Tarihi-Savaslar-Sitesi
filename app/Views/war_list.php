<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarihi Savaşlar</title>
    <style>
        /* Genel Ayarlar */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #6c5ce7, #74b9ff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Konteyner */
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 900px;
        }

        /* Başlık */
        .container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Savaş Bilgisi */
        .war {
            margin-bottom: 20px;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .war img {
            max-width: 200px;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
            display: block;
        }

        .war h3 {
            margin: 0 0 10px;
            color: #333;
            font-size: 20px;
        }

        .war p {
            margin: 5px 0;
            color: #555;
            font-size: 14px;
        }

        /* Düzenle/Sil Butonları */
        .actions {
            margin-top: 15px;
            text-align: right;
        }

        .actions a {
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 6px;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .actions a:first-child {
            margin-right: 10px;
        }

        .actions a:hover {
            background-color: #3e8e41;
        }

        .actions a:last-child {
            background-color: #e74c3c;
        }

        .actions a:last-child:hover {
            background-color: #c0392b;
        }

        /* Hiç Savaş Bulunamadı */
        .no-wars {
            text-align: center;
            color: #555;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tarihi Savaşlar</h1>
        <?php if (!empty($wars)): ?>
            <?php foreach ($wars as $war): ?>
                <div class="war">
                    <h3><?= esc($war['war_name']) ?></h3>
                    <p><?= word_limiter(esc($war['war_description']), 30) ?></p>
                    <?php if (!empty($war['war_image'])): ?>
                        <img src="<?= esc($war['war_image']) ?>" alt="<?= esc($war['war_name']) ?>">
                    <?php else: ?>
                        <p>Görsel mevcut değil.</p>
                    <?php endif; ?>
                    <div class="actions">
                        <?php if (isset($war['id'])): ?>
                            <?= anchor('war/edit/' . $war['id'], 'Düzenle', ['class' => 'btn-edit']) ?>
                            <?= anchor('war/delete/' . $war['id'], 'Sil', [
                                'onclick' => "return confirm('Bu savaşı silmek istediğinizden emin misiniz?');",
                                'class' => 'btn-delete'
                            ]) ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="no-wars">Henüz tarihi savaş bulunmamaktadır.</p>
        <?php endif; ?>
    </div>
</body>
</html>
