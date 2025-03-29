<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('menu_details', function (Blueprint $table) {
        $table->id();
        $table->foreignId('menu_id')->constrained()->onDelete('cascade');
        $table->text('ingredients');
        $table->text('nutrition_facts');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_details');
    }
};
