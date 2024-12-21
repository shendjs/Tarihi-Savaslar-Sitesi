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
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <a href="<?= base_url() ?>" class="logo">Tarihi Savaşlar</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li><a href="<?= base_url() ?>">Ana Sayfa</a></li>
            <li><a href="<?= base_url('generic') ?>">Genel Sayfa</a></li>
            <li class="active"><a href="<?= base_url('elements') ?>">Referanslar</a></li>
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

        <!-- Post -->
        <section class="post">
            <header class="major">
                <h1>Tarihi Savaşlar<br /></h1>
            </header>

            <!-- Text stuff -->
            <h2>Metin</h2>
            <p>Bu <b>koyu</b> ve bu <strong>kalın</strong>. Bu <i>italik</i> ve bu <em>vurgulanmış</em>.
                Bu <sup>üstsimge</sup> metin ve bu <sub>altsimge</sub> metin.
                Bu <u>altı çizili</u> ve bu kod: <code>for (;;) { ... }</code>.
                Son olarak, bu bir <a href="#">bağlantı</a>.</p>
            <hr />
            <h2>Başlık Seviyesi 2</h2>
            <h3>Başlık Seviyesi 3</h3>
            <h4>Başlık Seviyesi 4</h4>
            <h5>Başlık Seviyesi 5</h5>
            <h6>Başlık Seviyesi 6</h6>
            <hr />
            <header>
                <h2>Savaş ve Alt Başlık</h2>
                <p>Örnek savaş açıklaması.</p>
            </header>
            <p>Bu savaş hakkında detaylı bilgiler...</p>

            <hr />

            <!-- Lists -->
            <h2>Listeler</h2>
            <div class="row">
                <div class="col-6 col-12-small">
                    <h3>Sırasız</h3>
                    <ul>
                        <li>1. Savaş: Detaylar.</li>
                        <li>2. Savaş: Detaylar.</li>
                        <li>3. Savaş: Detaylar.</li>
                    </ul>

                    <h3>Alternatif</h3>
                    <ul class="alt">
                        <li>Detaylı açıklamalar burada olacak.</li>
                    </ul>
                </div>
                <div class="col-6 col-12-small">
                    <h3>Sıralı</h3>
                    <ol>
                        <li>Detaylı sıralı liste 1.</li>
                        <li>Detaylı sıralı liste 2.</li>
                        <li>Detaylı sıralı liste 3.</li>
                    </ol>

                    <h3>İkonlar</h3>
                    <ul class="icons">
                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                    </ul>
                </div>
            </div>

            <hr />
        </section>

        <!-- Footer -->
        <footer id="footer">
            <section>
                <h2>Aliquam sed mauris</h2>
                <p>Vestibulum fermentum neque convallis dictum accumsan orci ante at nunc.</p>
                <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                </ul>
            </section>
            <section>
                <h2>Sed Consequat</h2>
                <dl class="alt">
                    <dt>Adres</dt>
                    <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
                    <dt>Telefon</dt>
                    <dd>(000) 000-0000 x 0000</dd>
                    <dt>Email</dt>
                    <dd><a href="#">info@untitled.tld</a></dd>
                </dl>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
                </ul>
            </section>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/browser.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/breakpoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/util.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>
</html>
