<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beliController extends Controller
{
    public function halo($nama)
    {
    	return "Halo, " . $nama;
    }
 
    public function panggil()
    {
    	return action('beliController@halo', ['nama' => 'Diki']);
    }
}
