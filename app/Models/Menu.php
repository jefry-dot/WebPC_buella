<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public function details()
{
    return $this->hasOne(MenuDetail::class);
}


protected $fillable = ['name', 'description', 'category', 'image', 'price'];


}
