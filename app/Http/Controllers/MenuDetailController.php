<?php

use App\Models\Menu;
use App\Http\Controllers\Controller;

class MenuDetailController extends Controller
{
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu_detail', compact('menu'));
    }
}
