<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        echo 'Selamat Datang';
        
    }
    function about() {
        echo 'ALFARIZI 2141720142';
        
    }
    function articles() {
        echo 'artikel dengan id $id';
        
    }

    
}
