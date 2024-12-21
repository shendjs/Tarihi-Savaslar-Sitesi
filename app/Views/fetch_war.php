<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savaşlar</title>
</head>
<body>
    <?php if (!empty($wars)): ?>
        <?php foreach ($wars as $war): ?>
            <article>
                <header>
                    <span class="date"><?= htmlspecialchars($war['war_date'], ENT_QUOTES, 'UTF-8') ?></span> <!-- Savaş tarihi -->
                    <h2><a href="#"><?= htmlspecialchars($war['war_name'], ENT_QUOTES, 'UTF-8') ?></a></h2> <!-- Savaş adı -->
                </header>
                <a href="#" class="image fit">
                    <img src="<?= htmlspecialchars($war['war_image'], ENT_QUOTES, 'UTF-8') ?>" alt="Savaş Görseli" />
                </a> <!-- Savaş görseli -->
                <p><?= htmlspecialchars($war['war_description'], ENT_QUOTES, 'UTF-8') ?></p> <!-- Savaş açıklaması -->
                <ul class="actions special">
                    <li><a href="#" class="button">Tüm Hikayesi</a></li>
                </ul>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Henüz hiç savaş eklenmemiş.</p>
    <?php endif; ?>
</body>
</html>
