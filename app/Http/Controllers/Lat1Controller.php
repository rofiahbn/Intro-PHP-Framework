<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Rofiah";
        $data["asal"]="Bandung";
        return view('v_latihan1', $data);
    }

    public function method2(){
        $data['title'] = 'Daftar Mahasiswa';
        $data['daf_mhs'] = array(
            array("nama" => "Rofiah", "asal" => "Bandung"),
            array("nama" => "Budi", "asal" => "Bogor"),
            array("nama" => "Nadia", "asal" => "Jakarta")
        );
        return view('v_latihan2', $data);
    }
}
