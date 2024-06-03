<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('service_id')->constrained();
            $table->foreignId('employee_id')->constrained();
            $table->datetime('starts_at');
            $table->datetime('ends_at');
            $table->timestamp('cancelled_at')->nullable();
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
    }
};
