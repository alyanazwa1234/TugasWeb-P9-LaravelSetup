<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('about', [
            'title'  => 'Tentang Saya',
            'skills' => ['HTML5', 'CSS3', 'PHP', 'Laravel'],
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title'    => 'Kontak',
            'email'    => 'alyanazwamanurung6@gmail.com',
            'whatsapp' => '081265961362',
        ]);
    }
}