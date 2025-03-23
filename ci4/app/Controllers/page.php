<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman about',
            'content' => 'Ini adalah halaman about yang menjelaaskan tentang isi halaman ini'
        ]);
    }
    public function contact()
    {
        echo "Ini Halaman Contact";
    }
    public function faq()
    {
        echo "INi Halaman FAQ";
    }
    public function tos()
    {
        echo "ini Halaman Term Of Services";
    }
}