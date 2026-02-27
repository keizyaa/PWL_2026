<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke($id)
    {
        return 'Halaman Artikel dengan Id '.$id;
    }
}
