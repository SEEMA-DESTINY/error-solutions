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
        Schema::create('amazon_item_mappings', function (Blueprint $table) {
            $table->id();
            $table->string('qb_id')->nullable();
            $table->string('qb_name')->nullable();
            $table->string('amazon_id')->nullable();
            $table->string('amazon_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amazon_item_mappings');
    }
};
