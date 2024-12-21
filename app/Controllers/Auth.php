<?php

namespace App\Controllers;

use App\Models\UserModel; // Kullanıcı doğrulama ve kaydı için model

class Auth extends BaseController
{
    /**
     * Kullanıcı giriş işlemi
     */
    public function login()
    {
        $session = session();
        $errors = [];

        // Eğer kullanıcı zaten giriş yapmışsa
        if ($session->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        // Form gönderildiğinde
        if ($this->request->getMethod() === 'post') {
            // Validation kuralları
            $validation = \Config\Services::validation();
            $validation->setRules([
                'username' => 'required|alpha_numeric|min_length[5]|max_length[20]',
                'password' => 'required|min_length[3]', // Şifre kuralı minimum 3 olarak güncellendi
            ]);

            // Doğrulama çalıştır
            if (!$validation->withRequest($this->request)->run()) {
                // Doğrulama hatalarını al
                $errors = $validation->getErrors();
            } else {
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                // Kullanıcı doğrulama
                $userModel = new UserModel();
                $user = $userModel->where('username', $username)->first();

                // "yonetici" kullanıcısı için şifre kontrol istisnası
                if ($username === 'yonetici' && $password === '123') {
                    $session->set([
                        'username' => $username,
                        'logged_in' => true,
                    ]);
                    return redirect()->to('/dashboard');
                }

                if ($user && password_verify($password, $user['password'])) {
                    // Giriş başarılı, oturum başlat
                    $session->set([
                        'username' => $user['username'],
                        'logged_in' => true,
                    ]);

                    // Girişten sonra yönlendirme
                    return redirect()->to('/dashboard');
                } else {
                    $errors[] = "Kullanıcı adı veya şifre hatalı. Tekrar deneyiniz.";
                }
            }
        }

        // View'e hata mesajlarını gönder
        return view('login', ['errors' => $errors]);
    }

    /**
     * Kullanıcı çıkış işlemi
     */
    public function logout()
    {
        // Oturumu ve çerezleri sonlandır
        $session = session();
        $session->destroy(); // Oturumu temizle
        setcookie("username", "", time() - 3600, "/"); // Çerezi sil

        // Giriş sayfasına yönlendir
        return redirect()->to('/login');
    }

    /**
     * Kullanıcı kayıt işlemi
     */
    public function register()
    {
        $message = ''; // Hata veya başarı mesajı
        $errors = [];

        // Form gönderildiğinde
        if ($this->request->getMethod() === 'post') {
            // Validation kuralları
            $validation = \Config\Services::validation();
            $validation->setRules([
                'username' => 'required|alpha_numeric|min_length[5]|max_length[20]',
                'password' => 'required|min_length[3]', // Şifre kuralı minimum 3 olarak güncellendi
            ]);

            // Doğrulama çalıştır
            if (!$validation->withRequest($this->request)->run()) {
                // Doğrulama hatalarını al
                $errors = $validation->getErrors();
            } else {
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                // "yonetici" kullanıcısı için istisna
                if ($username === 'yonetici' && $password === '123') {
                    $data = [
                        'username' => $username,
                        'password' => password_hash($password, PASSWORD_DEFAULT),
                    ];
                    $userModel = new UserModel();
                    $userModel->insert($data);
                    return redirect()->to('/login')->with('success', 'Yönetici hesabı başarıyla kaydedildi! Giriş yapabilirsiniz.');
                }

                // Diğer kullanıcılar için normal kayıt
                $data = [
                    'username' => $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT), // Şifre hashleme
                ];

                $userModel = new UserModel();

                // Kullanıcı kaydı
                if ($userModel->insert($data)) {
                    return redirect()->to('/login')->with('success', 'Kayıt başarılı! Giriş yapabilirsiniz.');
                } else {
                    $message = 'Kayıt işlemi sırasında bir hata oluştu. Lütfen tekrar deneyin.';
                }
            }
        }

        // View'e hata veya başarı mesajını gönder
        return view('register', ['message' => $message, 'errors' => $errors]);
    }
}
