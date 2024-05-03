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
        // Create the districts table
        Schema::create('districts', function (Blueprint $table) {
            $table->string('id', 3)->primary();
            $table->string('district');
            $table->string('province_id', 3);
            $table->foreign('province_id')->references('id')->on('provinces');
        });

        // Define the districts data
        $districts = [
            ['id' => 'D01', 'district' => 'Anuradhapura', 'province_id' => 'P07'], // North Central
            ['id' => 'D02', 'district' => 'Puttalam', 'province_id' => 'P06'], // North Western
            ['id' => 'D03', 'district' => 'Vavuniya', 'province_id' => 'P03'], // Northern
            ['id' => 'D04', 'district' => 'Kurunegala', 'province_id' => 'P06'], // North Western
            ['id' => 'D05', 'district' => 'Mannar', 'province_id' => 'P03'], // Northern
            ['id' => 'D06', 'district' => 'Mathale', 'province_id' => 'P05'], // Central
            // Add more districts here if needed
        ];

        // Insert data into the districts table
        foreach ($districts as $district) {
            DB::table('districts')->insert($district);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the districts table
        Schema::dropIfExists('districts');
    }
};
