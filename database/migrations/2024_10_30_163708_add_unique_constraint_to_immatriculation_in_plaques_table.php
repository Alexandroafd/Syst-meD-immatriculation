<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('plaques', function (Blueprint $table) {
            $table->string('immatriculation')->unique()->change();
        });
    }
    
    public function down()
    {
        Schema::table('plaques', function (Blueprint $table) {
            $table->string('immatriculation')->change();
        });
    }
};