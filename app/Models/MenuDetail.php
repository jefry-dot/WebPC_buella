<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuDetail extends Model
{
    use HasFactory;
    protected $fillable = ['menu_id', 'ingredients', 'nutrition_facts'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

