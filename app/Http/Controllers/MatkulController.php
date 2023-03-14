<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    function index(){
        return view('matkul', [
            'matkul' => Matkul::all()
        ]);
}
}