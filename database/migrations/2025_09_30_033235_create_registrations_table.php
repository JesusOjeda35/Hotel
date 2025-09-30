<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{

    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('room_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->date('checkindate');
            $table->date('checkoutdate');
            $table->dateTime('checkintime');
            $table->dateTime('checkouttime');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
