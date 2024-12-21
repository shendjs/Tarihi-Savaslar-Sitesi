<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savaş Düzenle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Savaş Düzenle</h1>
        <!-- Savaş düzenleme formu -->
        <form action="<?= base_url('war/update') ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="war_id" value="<?= $war['id'] ?>">
            <label for="war_name">Savaş Adı:</label>
            <input type="text" id="war_name" name="war_name" value="<?= htmlspecialchars($war['war_name'], ENT_QUOTES, 'UTF-8') ?>" required>
            
            <label for="war_description">Açıklama:</label>
            <textarea id="war_description" name="war_description" rows="4" cols="50"><?= htmlspecialchars($war['war_description'], ENT_QUOTES, 'UTF-8') ?></textarea>

            <label for="war_image">Görsel URL:</label>
            <input type="text" id="war_image" name="war_image" value="<?= htmlspecialchars($war['war_image'], ENT_QUOTES, 'UTF-8') ?>">
            
            <input type="submit" value="Savaşı Düzenle">
        </form>
    </div>
</body>
</html>
