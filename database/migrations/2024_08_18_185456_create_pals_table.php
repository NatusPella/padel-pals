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
        Schema::create('pals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->text('name');
            $table->enum('status', ['concept', 'prefer', 'avoid', 'need more information']);
            $table->enum('gender', ['unknown', 'male', 'female', 'other']);
            $table->text('phone_number')->nullable();
            $table->decimal('level', 2, 1)->nullable();
            $table->decimal('fun_score', 3, 1)->nullable();
            $table->decimal('attraction_score', 3, 1)->nullable();
            $table->decimal('custom_multiplier', 3, 1)->nullable();
            $table->text('notes')->nullable();
            $table->date('last_played')->nullable();

            //$table->bool('easily_available', 3, 1)->nullable();
            //$table->text('profile_picture_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pals');
    }
};
