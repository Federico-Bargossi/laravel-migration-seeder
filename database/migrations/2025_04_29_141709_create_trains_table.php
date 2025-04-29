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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100); // Azienda
            $table->string('departure_station', 100); // Stazione di partenza
            $table->string('arrival_station', 100); // Stazione di arrivo
            $table->dateTime('departure_time'); // Orario di partenza
            $table->dateTime('arrival_time'); // Orario di arrivo
            $table->string('train_code', 10)->unique(); // Codice treno
            $table->unsignedTinyInteger('wagons'); // Totale Carrozze
            $table->boolean('is_on_time')->default(true); // Se in orario
            $table->boolean('is_deleted')->default(false); // Se cancellato
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
