<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Oturum kontrolü
        if (!session('logged_in')) {
            return redirect()->to('/login');
        }

        return view('dashboard'); // View dosyasını çağır
    }
}
