<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2241760131';
    }

    public function articles($id) {
        return 'Artikel Id : ' . $id; 
    }
}
