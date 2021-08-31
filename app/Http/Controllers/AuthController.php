<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            "NIS" => 3103119108,
            "Nama" => "Melinda Cahya Dhea Rizti",
            "Gender" => "Female",
            "Phone" => 6281390773010,
            "Kelas" => "XIIRPL4"
        ];
    }
}
