<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $connection = 'pgsql';
    
    public function up(): void
    {
        Schema::create('loginpgsqls', function (Blueprint $table) {
            $table->id();
            $table->string('caravan_UUID'); // کد شناسایی کاروان 
            $table->string('admin_melli'); // کد ملی مدیر
            $table->string('password'); // رمز عبور
            $table->string('email')->nullable(); // رمز عبور
            $table->string('mobile'); // رمز عبور
            $table->string('role'); // رمز عبور
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loginpgsqls');
    }
};
