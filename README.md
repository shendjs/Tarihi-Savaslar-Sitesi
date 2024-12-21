---

# Tarihi Savaşlar Temalı Web Sitesi

## Proje Tanımı
Bu proje, CodeIgniter altyapısıyla geliştirilmiş ve tarihi savaşlar temalı bir web sitesini kapsamaktadır. Proje, yönetim paneli, kullanıcı girişi, güvenli şifreleme, veritabanı işlemleri, form işlemleri, CRUD işlemleri ve çeşitli güvenlik önlemleri ile donatılmıştır.

## Özellikler
- **Yönetim Paneli:** Kullanıcıların içerik ekleyip düzenleyebileceği, silme işlemlerini yapabileceği bir yönetim paneli.
- **Veritabanı Kullanımı:** Güvenli kullanıcı şifreleri, içerik veritabanında saklanır.
- **CSRF Koruması ve Form Validasyonu:** Veri güvenliği için CSRF koruması açık ve form doğrulama kuralları kullanılmıştır.
- **Kullanıcı Girişi:** Yönetim paneline sadece giriş yapmış kullanıcılar erişebilir.
- **Gelişmiş Fonksiyonlar:** `url_title`, `pascalize`, `base_url`, `anchor`, `word_limiter` gibi fonksiyonlar projede kullanılmaktadır.
- **CRUD İşlemleri:** Veri ekleme, silme ve düzenleme işlemleri, veritabanına güvenli şekilde kaydedilmektedir.

## Gereksinimler
- PHP 7.4 ve üzeri
- CodeIgniter 4.x
- MySQL/MariaDB veritabanı

## Kurulum
1. **Veritabanı Yapılandırması:**
   - `application/config/database.php` dosyasını açın.
   - Veritabanı ayarlarını doğru şekilde yapılandırın.
2. **Geliştirme Modu ve Üretim Modu Ayarları:**
   - `index.php` dosyasındaki ortam türünü (development/production) ayarlayın.
3. **Kullanıcı Girişi:**
   - Admin paneline giriş yapmak için kullanıcı adı: `yonetici`, şifre: `123` kullanılacaktır.

## Fonksiyonlar
- **URL Başlıkları:** `url_title()` fonksiyonu, URL dostu başlıklar oluşturur.
- **Pascal Case:** `pascalize()` fonksiyonu, metinleri PascalCase formatına dönüştürür.
- **Base URL:** `base_url()` fonksiyonu, proje içindeki tüm bağlantıların kök URL'sini döner.
- **Anchor Bağlantılar:** `anchor()` fonksiyonu, HTML bağlantıları oluşturur.
- **Kelime Sınırlandırması:** `word_limiter()` fonksiyonu, metinleri belirtilen kelime sayısına göre sınırlar.

## Güvenlik
- **Şifreleme:** Kullanıcı şifreleri, PHP'nin `password_hash()` fonksiyonu ile güvenli bir şekilde saklanır.
- **CSRF Koruması:** Form işlemleri, CSRF korumasıyla güvence altına alınmıştır.
- **Session Yönetimi:** Kullanıcı girişi yapılmadan yönetim paneline erişim sağlanamaz.

## Katkı Sağlayanlar
- Selim Can Erdoğan - Proje geliştiricisi
- Emir Usta  - Proje geliştiricisi

## Lisans
Bu proje, [MIT Lisansı](LICENSE) ile lisanslanmıştır.

---

This README provides a comprehensive overview of your project while remaining professional and concise. Adjust the details as necessary based on any additional information you’d like to include.
