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
        Schema::create('training_program', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiary_id'); // This is the foreign key
            $table->string('program_name');
            $table->string('date');
            $table->string('place');
            $table->string('conductor_name');
            $table->string('conductor_payment');
            $table->string('province');
            $table->string('district');
            $table->string('ds_division');
            $table->string('gn_division');
            $table->string('as_center');

            $table->timestamps();

            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_program');
    }
};