<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('reference_code')->unique();   // e.g. SMR-ISR-014, boarding-pass style ref
            $table->string('country');                     // Israel, Armenia
            $table->string('country_code', 2);              // IL, AM (ISO for flag rendering)
            $table->string('title');                        // Caregiver, CNC Machine Operator...
            $table->string('category')->nullable();         // Caregiver / General Worker / Skilled Trade
            $table->text('summary');
            $table->text('requirements')->nullable();
            $table->string('english_level')->nullable();    // e.g. "Good communication preferred"
            $table->boolean('trc_assistance')->default(false);
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
