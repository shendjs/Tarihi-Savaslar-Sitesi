<section>
    <h3>Yorumlar</h3>
    <?php if (!empty($comments)): ?>
        <ul>
            <?php foreach ($comments as $comment): ?>
                <li>
                    <strong><?= esc($comment['name']) ?></strong> (<?= esc($comment['email']) ?>)
                    <p><?= esc($comment['message']) ?></p>
                    <small><?= esc($comment['created_at']) ?></small>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Henüz yorum eklenmemiş.</p>
    <?php endif; ?>
</section>
