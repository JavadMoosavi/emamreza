<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    protected $connection = 'mysql';

    public function up(): void
    {
        Schema::create('homemysqls', function (Blueprint $table) {
            $table->id();
            $table->string('home_UUID')->unique();
            $table->string('home_human_id');
            $table->string('home_admin_melli');
            $table->string('home_admin_name');
            $table->string('home_admin_family');
            $table->string('home_admin_mobile');
            $table->string('home_name');
            $table->string('home_servant');
            $table->string('home_type');
            $table->string('home_capacity_man');
            $table->string('home_capacity_woman');
            $table->string('home_phone');
            $table->string('home_route');
            $table->string('home_address');
            $table->string('home_latitude');
            $table->string('home_longitude');
            $table->string('home_self-sufficiency');
            $table->string('home_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homemysqls');
    }
};
