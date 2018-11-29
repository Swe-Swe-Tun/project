<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $filepath= public_path()."/file/user.json";
        $data=file_get_contents($filepath);
        $json = json_decode($data);
        echo "<pre>".print_r($json,true). "</pre>";



    }
}
