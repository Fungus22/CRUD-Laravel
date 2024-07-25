<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class oddsController extends Controller
{
    public function index() {
        return view("odds.index");
    }
    public function perkenalan($name) {
        $data = [
            "name" => $name
        ];
        return view("odds.perkenalan", $data);  //opsi pertama
        
        // return view("odds.perkenalan",  compact("name"));   //opsi kedua
    }








    public function urlerror($urlerror) {
        echo "Hai,  $urlerror ";
        echo "</br>";
        echo "URL ERROR:Salah Tulis";
    }
}
