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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('password')->nullable();
            $table->string('configpassword')->nullable();
            $table->string('phone')->nullable();
            $table->string('adress')->nullable();
            $table->string('age')->nullable();
            $table->string('niveaux_etudes')->default('');
            $table->string('spéciatité')->default('');
            $table->string('nomprojet')->default('');
            $table->string('description')->default('');
            $table->string('message')->default('');
            $table->string('budjet')->default('');
            $table->string('lien_compte_facebook')->default('') ;
            $table->string('lien_compte_instagram')->default('')  ;
            $table->string('lien_compte_linkedin')->default('');
            $table->string('image')->default('');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
