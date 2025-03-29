<?php
namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all(); // Mengambil semua menu
        return view('menu', compact('menus'));
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id); // Cari menu berdasarkan ID
        return view('menu_detail', compact('menu'));
    }
}
