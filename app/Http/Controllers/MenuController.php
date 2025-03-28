<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Ambil semua data menu dari database
        $menus = Menu::all();

        // Kirim data menu ke tampilan Blade
        return view('menu', compact('menus'));
    }
}
