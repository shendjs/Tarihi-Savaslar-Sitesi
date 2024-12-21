<!DOCTYPE HTML>
<html lang="tr">
<head>
    <title>Tarihi Savaşlar</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
    <noscript><link rel="stylesheet" href="<?= base_url('assets/css/noscript.css') ?>" /></noscript>
</head>
<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper" class="fade-in">

        <!-- Intro -->
        <div id="intro">
            <h1>Tarihi Savaşlar<br /></h1>
            <p>Dünya tarihine damga vurmuş savaşlar ve stratejiler hakkında her şey.</p>
            <ul class="actions">
                <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Devam Et</a></li>
            </ul>
        </div>

        <!-- Header -->
        <header id="header">
            <a href="<?= base_url() ?>" class="logo">Tarihi Savaşlar</a>
        </header>

        <!-- Nav -->
        <nav id="nav">
            <ul class="links">
                <li class="active"><a href="<?= base_url() ?>">Ana Sayfa</a></li>
                <li><a href="<?= base_url('generic') ?>">Genel Sayfa</a></li>
                <li><a href="<?= base_url('elements') ?>">Referanslar</a></li>
            </ul>
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://github.com/shendjs/Tarihi-Savaslar-Sitesi" class="icon brands fa-github" target="_blank"></a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <!-- Featured Post -->
            <article class="post featured">
                <header class="major">
                    <span class="date">1815</span>
                    <h2><a href="#">Waterloo Savaşı<br /></a></h2>
                    <p>Napolyon'un ordusu ile İngiliz ve Prusya kuvvetleri arasındaki unutulmaz bir savaş.</p>
                </header>
                <a href="#" class="image main"><img src="<?= base_url('assets/images/waterloo.jpg') ?>" alt="Waterloo Savaşı" /></a>
                <ul class="actions special">
                    <li><a href="#" class="button large">Detayları Gör</a></li>
                </ul>
            </article>

            <!-- Posts -->
            <section class="posts">
                <?php if (!empty($wars)): ?>
                    <?php foreach ($wars as $war): ?>
                        <article>
                            <header>
                                <span class="date"><?= esc($war['created_at']) ?></span>
                                <h2><a href="#"><?= esc($war['war_name']) ?><br /></a></h2>
                            </header>
                            <?php if (@getimagesize($war['war_image'])): ?>
                                <a href="#" class="image fit"><img src="<?= $war['war_image'] ?>" alt="<?= esc($war['war_name']) ?>" /></a>
                            <?php else: ?>
                                <a href="#" class="image fit"><img src="<?= base_url('assets/images/default.jpg') ?>" alt="Varsayılan Görsel" /></a>
                            <?php endif; ?>
                            <p><?= esc($war['war_description']) ?></p>
                            <ul class="actions special">
                                <li><a href="#" class="button">Detayları Gör</a></li>
                            </ul>
                        </article>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Henüz eklenen savaş yok.</p>
                <?php endif; ?>
            </section>

            <!-- Yorumlar Bölümü -->
            <section id="comments">
                <h3>Kullanıcı Yorumları</h3>
                <?php if (!empty($comments)): ?>
                    <?php foreach ($comments as $comment): ?>
                        <div class="comment">
                            <p><strong><?= esc($comment['name']) ?></strong> - <?= esc($comment['created_at']) ?></p>
                            <p><?= esc($comment['message']) ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Henüz yorum bulunmamaktadır.</p>
                <?php endif; ?>

                <!-- Yorum Formu -->
                <form method="post" action="<?= base_url('comment/add') ?>">
                    <?= csrf_field() ?>
                    <label for="name">İsim:</label>
                    <input type="text" name="name" id="name" required>

                    <label for="email">E-posta:</label>
                    <input type="email" name="email" id="email" required>

                    <label for="message">Mesaj:</label>
                    <textarea name="message" id="message" rows="3" required></textarea>

                    <button type="submit">Gönder</button>
                </form>
            </section>
            

            <!-- Başarı ve Hata Mesajları -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- Footer -->
            <footer>
                <div class="pagination">
                    <a href="#" class="page active">1</a>
                    <span class="extra">&hellip;</span>
                    <a href="#" class="next">Sıradaki</a>
                </div>
            </footer>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <section>
                <h3>Adres</h3>
                <p>Balıkesir Gönen<br />Onyedi Eylül Üniversitesi</p>
                <h3>Telefon</h3>
                <p><a href="#">(000) 000-0000</a></p>
            </section>
        </footer>

        <!-- Copyright -->
        <div id="copyright">
            <ul><li>&copy; Tarihi Savaşlar</li><li>Tasarım: <a href="#">Tarihi Savaşlar</a></li></ul>
        </div>

    </div>

    <!-- Scripts -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.scrollex.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.scrolly.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/browser.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/breakpoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/util.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
