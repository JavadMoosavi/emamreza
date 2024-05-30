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
        Schema::create('pilgrimmysqls', function (Blueprint $table) {
            $table->id();
            $table->string('pilgrim_UUID')->unique(); //شناسه زائر
            $table->string('pilgrim_caravan_UUID'); //شناسه کاروان زائر
            $table->string('pilgrim_name'); // نام زائر
            $table->string('pilgrim_family'); // نام خانوادگی زائر
            $table->string('pilgrim_melli'); // کد ملی زائر
            $table->string('pilgrim_birthdate'); // تاریخ تولد زائر
            $table->string('pilgrim_mobile'); // موبایل زائر
            $table->string('pilgrim_email')->nullable(); // ایمیل زائر
            $table->string('pilgrim_shenasname'); // شماره شناسنامه زائر
            $table->string('pilgrim_fathername'); // نام پدر زائر
            $table->string('pilgrim_education'); //تحصیلات زائر
            $table->string('pilgrim_sex'); //جنسیت زائر
            $table->string('pilgrim_city')->nullable(); // شهر زائر
            $table->string('pilgrim_province')->nullable(); // استان زائر
            $table->string('pilgrim_home_UUID'); //شناسه اسکان زائر

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilgrimmysqls');
    }
};
