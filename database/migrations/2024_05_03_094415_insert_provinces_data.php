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
        // Create the provinces table
        Schema::create('provinces', function (Blueprint $table) {
            $table->string('id', 3)->primary()->unique();
            $table->string('province');
        });

        // Define the provinces data
        $provinces = [
            ['id' => 'P01', 'province' => 'Eastern'],
            ['id' => 'P02', 'province' => 'Western'],
            ['id' => 'P03', 'province' => 'Northern'],
            ['id' => 'P04', 'province' => 'Southern'],
            ['id' => 'P05', 'province' => 'Central'],
            ['id' => 'P06', 'province' => 'North Western'],
            ['id' => 'P07', 'province' => 'North Central'],
            ['id' => 'P08', 'province' => 'Sabaragamuwa'],
            ['id' => 'P09', 'province' => 'Uva'],
            
        ];

        // Insert data into the provinces table
        foreach ($provinces as $province) {
            DB::table('provinces')->insert($province);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the provinces table
        Schema::dropIfExists('provinces');
    }
};