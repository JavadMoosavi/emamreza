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
    //All home admins and home servants stored here

    public function up(): void
    {
        Schema::create('homeadminmysqls', function (Blueprint $table) {
            $table->id();
            $table->string('home_UUID'); //شناسه اسکان محل خدمت
            $table->string('name'); //نام
            $table->string('family'); // نام خانوادگی
            $table->string('fathername'); //نام پدر
            $table->string('melli'); //کد ملی
            $table->string('mobile'); //موبایل
            $table->string('phone'); //تلفن ثابت
            $table->string('birthday'); //تاریخ تولد
            $table->string('shenasname'); //شماره شناسنامه
            $table->string('sex'); //جنسیت
            $table->string('job'); //شغل
            $table->string('home_job'); //سمت در اسکان
            $table->string('address'); //آدرس
            $table->string('province'); //استان محل سکونت/تولد
            $table->string('city'); //شهر محل سکونت/تولد
            $table->string('email'); //ایمیل
            $table->string('role'); //نقش در اسکان (مدیر یا خادم)
            $table->string('status'); //وضعیت تایید
            $table->string('timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homeadminmysqls');
    }
};
