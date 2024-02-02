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
        Schema::disableForeignKeyConstraints();
        Schema::create('aventures', function (Blueprint $table) {
            $table->id();
            $table->string('titelAventure');
            $table->longText('descriptionsAventeur');
            $table->longText('conseils');


            $table->foreignId('distination_id')
                ->constrained('distinations')
                ->unique();

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aventures');
    }
};
