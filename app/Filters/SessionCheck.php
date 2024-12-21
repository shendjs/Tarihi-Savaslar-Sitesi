<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class SessionCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $sessionLifetime = 300; // 5 dakika

        // Oturum süresini kontrol et
        if (isset($session->last_activity) && (time() - $session->last_activity > $sessionLifetime)) {
            $session->destroy(); // Oturumu sonlandır
            return redirect()->to('/login')->with('error', 'Oturum süreniz doldu. Lütfen tekrar giriş yapınız.');
        }

        // Oturumun son etkinlik zamanını güncelle
        $session->set('last_activity', time());
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Sonrasında yapılacak işlem yok
    }
}
