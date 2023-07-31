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
        Schema::table('productts', function (Blueprint $table) {
            //
            $table->string('Device name');
            $table->string('Company')->unique();
            $table->text('Description')->nullable();
            $table->string('Wilaya');
            $table->integer('Quantitie');
            $table->integer('Weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productts', function (Blueprint $table) {
            //
        });
    }
};
