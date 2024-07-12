<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class AdminController extends Controller
{
    //
    public function index()
    {
        $data_layout = [ 
            'title' => 'Halaman Admin',
            'card_title' => 'Selamat Datang di Halaman Admin',
            'card_footer' => '@sttnf',
        ];
        View::share($data_layout);

        return view('admin.index',['username' => 'Dono Warkop']);
    }
}
