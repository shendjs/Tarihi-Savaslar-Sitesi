<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Kullanıcının giriş yapıp yapmadığını kontrol et
        if (!$session->get('logged_in')) {
            // Eğer giriş yapılmamışsa, login sayfasına yönlendir
            return redirect()->to('/login')->with('error', 'Lütfen giriş yapınız.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Bu filtrede çıkış işlemi sonrası bir işlem yapılmayacak
    }
}
