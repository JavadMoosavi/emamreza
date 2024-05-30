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
        Schema::create('caravanmysqls', function (Blueprint $table) {
            
            $table->id();
            $table->string('caravan_UUID')->unique(); //شناسه کاروان
            $table->string('caravan_human_id'); //شناسه فرم کاروان

            $table->string('admin_name'); // نام مدیر کاروان
            $table->string('admin_family'); // نام خانوادگی مدیر کاروان
            $table->string('admin_melli')->unique(); // کد ملی مدیر
            $table->string('admin_birthdate'); // تاریخ تولد مدیر
            $table->string('admin_mobile')->unique(); // موبایل مدیر
            $table->string('admin_email')->nullable(); // ایمیل مدیر
            $table->string('admin_shenasname'); // شماره شناسنامه مدیر
            $table->string('admin_fathername'); // نام پدر مدیر
            $table->string('admin_education'); //تحصیلات مدیر
            $table->string('admin_sex'); //جنسیت مدیر
            $table->string('admin_city'); // شهر مدیر
            $table->string('admin_province'); // استان مدیر
            $table->string('admin_village')->nullable(); // روستای مدیر
            $table->text('admin_address'); // آدرس کامل مدیر
            $table->string('admin_phone'); //تلفن ثابت مدیر
            $table->string('admin_zipcode')->nullable(); // کد پستی مدیر
            $table->string('caravan_name'); //نام هیئت
            $table->string('start_date'); //تاریخ شروع پیاده روی
            $table->string('duration'); // تعداد روز پیاده روی
            $table->string('route'); // تعداد روز پیاده روی
            
            $table->string('entrance'); //تاریخ ورود
            $table->string('exit'); //تاریخ خروج
            
            $table->string('coadmin_name'); // نام معاون کاروان
            $table->string('coadmin_family'); // نام خانوادگی معاون کاروان
            $table->string('coadmin_melli'); // کد ملی معاون
            $table->string('coadmin_birthdate'); // تاریخ تولد معاون
            $table->string('coadmin_mobile'); // موبایل معاون
            $table->string('coadmin_email')->nullable(); // ایمیل معاون
            $table->string('coadmin_shenasname'); // شماره شناسنامه معاون
            $table->string('coadmin_fathername'); // نام پدر معاون
            $table->string('coadmin_education'); //تحصیلات معاون
            $table->string('coadmin_sex'); //جنسیت معاون

            $table->string('rowhani_name'); // نام روحانی کاروان
            $table->string('rowhani_family'); // نام خانوادگی روحانی کاروان
            $table->string('rowhani_melli'); // کد ملی روحانی
            $table->string('rowhani_code'); // کد خاص روحانی
            $table->string('rowhani_birthdate'); // تاریخ تولد روحانی
            $table->string('rowhani_mobile'); // موبایل روحانی
            $table->string('rowhani_email')->nullable(); // ایمیل روحانی
            $table->string('rowhani_shenasname'); // شماره شناسنامه روحانی
            $table->string('rowhani_fathername'); // نام پدر روحانی
            $table->string('rowhani_education'); //تحصیلات روحانی
            $table->string('rowhani_sex'); //جنسیت روحانی

            $table->string('connect_name'); // نام رابط پذیرش کاروان
            $table->string('connect_family'); // نام خانوادگی رابط پذیرش کاروان
            $table->string('connect_melli'); // کد ملی رابط پذیرش
            $table->string('connect_birthdate'); // تاریخ تولد رابط پذیرش
            $table->string('connect_mobile'); // موبایل رابط پذیرش
            $table->string('connect_email')->nullable(); // ایمیل رابط پذیرش
            $table->string('connect_shenasname'); // شماره شناسنامه رابط پذیرش
            $table->string('connect_fathername'); // نام پدر رابط پذیرش
            $table->string('connect_education'); //تحصیلات رابط پذیرش
            $table->string('connect_sex'); //جنسیت رابط پذیرش

            $table->string('pilgrim_man'); //زائرین مرد سال جاری
            $table->string('pilgrim_man_old'); //زائرین مرد سال قبل
            $table->string('pilgrim_woman'); //زائرین زن سال جاری
            $table->string('pilgrim_woman_old'); //زائرین زن سال قبل

            
            $table->text('pilgrim_woman_home')->nullable(); //
            $table->text('pilgrim_man_home')->nullable(); //

            $table->string('verified');
            $table->string('timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caravanmysqls');
    }
};
