<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [

            "barang" => Home::latest()->paginate(8)->withQueryString()
        ]);
    }
    public function show($id)
    {
        return view('beli', [
            "barang" => Home::all(),
            'beli' => Home::find($id)
        ]);
    }
}
