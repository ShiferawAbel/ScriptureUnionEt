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
        Schema::create('request_ids', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('full_name_eng');
            $table->string('full_name_amh');
            $table->string('role_eng');
            $table->string('role_amh');
            $table->string('address_eng');
            $table->string('address_amh');
            $table->string('phone');
            $table->string('profile');
            $table->string('qr_code')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_ids');
    }
};
