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
        Schema::create('gn_divisions', function (Blueprint $table) {
            $table->id();
            $table->string('gn_division');
            $table->unsignedBigInteger('ds_division_id');
            $table->foreign('ds_division_id')->references('id')->on('ds_divisions')->onDelete('cascade');
            
        });

        // Insert provided data
        DB::table('gn_divisions')->insert([
            
            ['gn_division' => 'Medawachchiya', 'ds_division_id' => 1], 
            ['gn_division' => 'Kebithigollewa', 'ds_division_id' => 1], 
            ['gn_division' => 'Thalawa', 'ds_division_id' => 1], 
            ['gn_division' => 'Horowpathana', 'ds_division_id' => 1], 
            ['gn_division' => 'Nochchiyagama', 'ds_division_id' => 1], 
            ['gn_division' => 'Rambewa', 'ds_division_id' => 2], 
            ['gn_division' => 'Thirappane', 'ds_division_id' => 3], 
            ['gn_division' => 'Galenbidunuwewa', 'ds_division_id' => 4], 
            ['gn_division' => 'Palugaswewa', 'ds_division_id' => 5], 
            ['gn_division' => 'Mihintale', 'ds_division_id' => 6], 
            ['gn_division' => 'Mahavilachchiya', 'ds_division_id' => 7], 
            ['gn_division' => 'Na.Nu.Pa', 'ds_division_id' => 8]
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gn_divisions');
    }
};
