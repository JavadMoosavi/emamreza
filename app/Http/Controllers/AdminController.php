<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caravanmysql;
use App\Models\Pilgrimmysql;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

use Exception;

class AdminController extends Controller
{

    public function pilgrimAdminUpdate(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'pilgrim_mid' => 'required|size:10', //کد ملی دریافت شده از سرور
                'pilgrim_name' => 'required',
                'pilgrim_family' => 'required',
                'pilgrim_shenasname' => 'required|numeric',
                'pilgrim_birthdate' => 'required|size:10',
                'pilgrim_mobile' => 'required|numeric|digits:11|starts_with:09',
                'pilgrim_education' => 'required|doesnt_start_with:0',
                'pilgrim_sex' => 'required|doesnt_start_with:0',
                'pilgrim_fathername' => 'required',

            ],
            [
                'pilgrim_name.required' => 'نام زائر وارد نشده است',
                'pilgrim_family.required' => 'نام خانوادگی زائر وارد نشده است',
                'pilgrim_mid.required' => 'ثبت کد ملی ضروری است',
                'pilgrim_mid.size' => 'کد ملی باید ده رقم باشد است',
                'pilgrim_shenasname.required' => 'شماره شناسنامه وارد نشده است',
                'pilgrim_shenasname.numeric' => 'شماره شناسنامه باید به صورت عدد وارد شود',
                'pilgrim_birthdate.required' => 'تاریخ تولد وارد نشده است',
                'pilgrim_mobile.required' => 'موبایل وارد نشده است',
                'pilgrim_mobile.numeric' => 'موبایل باید عدد باشد',
                'pilgrim_mobile.digits' => 'موبایل باید 11 رقم باشد',
                'pilgrim_mobile.starts_with' => 'موبایل با 09 شروع می شود',
                'pilgrim_birthdate.size' => 'تاریخ تولد لزوما باید از تقویم نمایش داده شده ثبت شود',
                'pilgrim_edu.required' => 'تحصیلات زائر وارد نشده است',
                'pilgrim_edu.doesnt_start_with' => 'تحصیلات زائر انتخاب نشده است',
                'pilgrim_sex.required' => 'جنسیت زائر وارد نشده است',
                'pilgrim_sex.doesnt_start_with' => 'جنسیت زائر انتخاب نشده است',
                'pilgrim_fathername.required' => 'نام پدر زائر وارد نشده است',
            ]
        );

        if ($validator->passes()) {
            //     $pilgrim = Pilgrimmysql::where('pilgrim_melli', '=', $request->pilgrim_melli)->first();
            //     if ($pilgrim == null) { //Register new pilgrim

            //         $pilgrim_UUID = (string) Str::uuid();

            //         $pilgrimData = [
            //             'pilgrim_UUID' => $pilgrim_UUID,
            //             'pilgrim_caravan_UUID' => $request->cu,
            //             'pilgrim_name' => trim($request->pilgrim_name),
            //             'pilgrim_family' => trim($request->pilgrim_family),
            //             'pilgrim_melli' => trim($request->pilgrim_melli),
            //             'pilgrim_birthdate' => trim($request->pilgrim_birthdate),
            //             'pilgrim_mobile' => trim($request->pilgrim_mobile),
            //             'pilgrim_email' => trim($request->pilgrim_email),
            //             'pilgrim_shenasname' => trim($request->pilgrim_shenasname),
            //             'pilgrim_fathername' => trim($request->pilgrim_fathername),
            //             'pilgrim_education' => trim($request->pilgrim_edu),
            //             'pilgrim_sex' => trim($request->pilgrim_sex),
            //             'pilgrim_home_UUID' => '0',


            //         ];

            //         // Pilgrimpgsql::create($pilgrimData);
            //         Pilgrimmysql::create($pilgrimData);

            //         return response()->json(['hasError' => '0', 'msg' => 'ثبت اطلاعات زائر با موفقیت انجام شد']);
            //         // return response()->json(['hasError' => '0', 'msg' => session('caravanUUID')]);
            //     } elseif ($pilgrim != null && ($pilgrim->pilgrim_caravan_UUID == 0 || $pilgrim->pilgrim_caravan_UUID == $request->cu)) {
            //         //Update old pilgrim data
            //         $pilgrim_UUID = (string) Str::uuid();

            //         //Two mode 1: if pilgrim has UUID, keep it
            //         if ($pilgrim->pilgrim_UUID != 0) {
            //             Pilgrimmysql::where('pilgrim_melli', '=', $request->pilgrim_melli)
            //                 ->update([
            //                     // 'pilgrim_UUID' => $pilgrim_UUID,
            //                     'pilgrim_caravan_UUID' => $request->cu,
            //                     'pilgrim_name' => trim($request->pilgrim_name),
            //                     'pilgrim_family' => trim($request->pilgrim_family),
            //                     // 'pilgrim_melli' => trim($request->pilgrim_melli),
            //                     'pilgrim_birthdate' => trim($request->pilgrim_birthdate),
            //                     'pilgrim_mobile' => trim($request->pilgrim_mobile),
            //                     'pilgrim_email' => trim($request->pilgrim_email),
            //                     'pilgrim_shenasname' => trim($request->pilgrim_shenasname),
            //                     'pilgrim_fathername' => trim($request->pilgrim_fathername),
            //                     'pilgrim_education' => trim($request->pilgrim_edu),
            //                     'pilgrim_sex' => trim($request->pilgrim_sex),
            //                     'pilgrim_home_UUID' => '0',
            //                 ]);
            //         }

            //         //Two mode 2: if pilgrim doesn't have UUID, generate one
            //         elseif ($pilgrim->pilgrim_UUID == 0) {
            //             Pilgrimmysql::where('pilgrim_melli', '=', $request->pilgrim_melli)
            //                 ->update([
            //                     'pilgrim_UUID' => $pilgrim_UUID,
            //                     'pilgrim_caravan_UUID' => $request->cu,
            //                     'pilgrim_name' => trim($request->pilgrim_name),
            //                     'pilgrim_family' => trim($request->pilgrim_family),
            //                     // 'pilgrim_melli' => trim($request->pilgrim_melli),
            //                     'pilgrim_birthdate' => trim($request->pilgrim_birthdate),
            //                     'pilgrim_mobile' => trim($request->pilgrim_mobile),
            //                     'pilgrim_email' => trim($request->pilgrim_email),
            //                     'pilgrim_shenasname' => trim($request->pilgrim_shenasname),
            //                     'pilgrim_fathername' => trim($request->pilgrim_fathername),
            //                     'pilgrim_education' => trim($request->pilgrim_edu),
            //                     'pilgrim_sex' => trim($request->pilgrim_sex),
            //                     'pilgrim_home_UUID' => '0',
            //                 ]);
            //         }
            //         return response()->json(['hasError' => '0', 'msg' => 'به روز رسانی اطلاعات زائر با موفقیت انجام شد']);
            //     } else {
            //         return response()->json(['hasError' => '1', 'msg' => 'زائر قبلا در کاروانی دیگر ثبت نام شده است و امکان ثبت مجدد نیست']);
            //     }
            // } else {
            //     return response()->json(['hasError' => '1', 'msg' => $validator->errors()->first()]);
            return response()->json(['data' => $request->all()]);
        } else {
            return response()->json(['msg' => $validator->errors()->all()]);
        }
    }

    public function adminPilgrimAvailableCheck(Request $request)
    {
        $pilgrim = Pilgrimmysql::where('pilgrim_melli', '=', $request->pilgrim_melli)->first();

        if ($pilgrim != null && $pilgrim->pilgrim_caravan_UUID != '0') // Registered in Caravan
        {
            //Retrive Home and Caravan information
            $caravanName = Caravanmysql::where('caravan_UUID', '=', $pilgrim->pilgrim_caravan_UUID)->first();
            if ($caravanName != null) {
                return response()->json(['info' => $pilgrim, 'caravaName' => $caravanName -> caravan_name, 'homeName' => 'مرکز اسکان شهدا', 'homeID' => $pilgrim -> pilgrim_home_UUID]); // Check it
            }
        }
        elseif ($pilgrim != null && ($pilgrim->pilgrim_caravan_UUID == '0' && $pilgrim->pilgrim_home_UUID == '0'))  // UNregistered in Caravan & Home
        {
            return response()->json(['info' => $pilgrim, 'caravaName' => 'نام نویسی نشده است', 'homeName' => 'فاقد اسکان']); // Check it
        }
        elseif ($pilgrim != null && ($pilgrim->pilgrim_caravan_UUID == '0' && $pilgrim->pilgrim_home_UUID != '0'))  // UNregistered in Caravan ONLY
        {
            return response()->json(['info' => $pilgrim, 'caravaName' => 'نام نویسی نشده است', 'homeName' => 'مرکز اسکان شهدا']); // Check it
        }
        
        elseif ($pilgrim == null)
        {
            return response()->json(['result' => 'زائر با مشخصات درج شده یافت نشد']); // Check it
        }
    }

    public function caravanUpdateAll(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'admin_name' => 'required',
                'admin_family' => 'required',
                // 'admin_melli' => 'required|numeric|digits:10',
                'admin_birthday' => 'required|size:10',
                'admin_mobile' => 'required|numeric|digits:11|starts_with:09',
                'admin_shenasname' => 'required|numeric',
                'admin_fathername' => 'required',
                'admin_education' => 'required',
                'admin_sex' => 'required',
                'city' => 'required',
                'province' => 'required',
                'address' => 'required',
                'admin_phone' => 'required',

                'caravan_name' => 'required',
                'start_date' => 'required|size:10',
                'days' => 'required|doesnt_start_with:0',
                'entrance_date' => 'required|doesnt_start_with:0',
                'exit_date' => 'required|doesnt_start_with:0',
                'man' => 'required|numeric',
                'man_old' => 'required|numeric|doesnt_start_with:0',
                'woman' => 'required|numeric|doesnt_start_with:0',
                'woman_old' => 'required|numeric|doesnt_start_with:0',
                'route' => 'required',

                'rowhani_name' => 'required',
                'rowhani_family' => 'required',
                'rowhani_melli' => 'required|size:10',
                'rowhani_shenasname' => 'required|numeric',
                'rowhani_birthdate' => 'required|size:10',
                'rowhani_mobile' => 'required|numeric|digits:11|starts_with:09',
                'rowhani_edu' => 'required|min:2',
                'rowhani_sex' => 'required|min:2',
                'rowhani_fathername' => 'required',
                'rowhani_code' => 'required',

                'connect_name' => 'required',
                'connect_family' => 'required',
                'connect_melli' => 'required|size:10',
                'connect_shenasname' => 'required|numeric',
                'connect_birthdate' => 'required|size:10',
                'connect_mobile' => 'required|numeric|digits:11|starts_with:09',
                'connect_edu' => 'required|min:2',
                'connect_sex' => 'required|min:2',
                'connect_fathername' => 'required',

                'coadmin_name' => 'required',
                'coadmin_family' => 'required',
                'coadmin_melli' => 'required|size:10',
                'coadmin_shenasname' => 'required|numeric',
                'coadmin_birthdate' => 'required|size:10',
                'coadmin_mobile' => 'required|numeric|digits:11|starts_with:09',
                'coadmin_edu' => 'required|min:2',
                'coadmin_sex' => 'required|max:5',
                'coadmin_fathername' => 'required',
            ]
        );

        if ($validator->passes()) {

            try {
                $result = Caravanmysql::where('caravan_UUID', '=', $request->cuid)
                    ->where('caravan_human_id', '=', $request->fno)
                    ->update([

                        'admin_name' => trim($request->admin_name),
                        'admin_family' => trim($request->admin_family),
                        // 'admin_melli' => trim($request->melli),
                        'admin_birthdate' => trim($request->admin_birthday),
                        'admin_mobile' => trim($request->admin_mobile),
                        'admin_email' => trim($request->admin_email),
                        'admin_shenasname' => trim($request->admin_shenasname),
                        'admin_fathername' => trim($request->admin_fathername),
                        'admin_education' => trim($request->admin_education),
                        'admin_sex' => trim($request->admin_sex),
                        'admin_city' => trim($request->city),
                        'admin_province' => trim($request->province),
                        'admin_village' => trim($request->village),
                        'admin_address' => trim($request->address),
                        'admin_phone' => trim($request->admin_phone),
                        'admin_zipcode' => trim($request->zipcode),
                        'caravan_name' => trim($request->caravan_name),

                        'start_date' => trim($request->start_date),
                        'duration' => trim($request->days),
                        'entrance' => trim($request->entrance_date),
                        'route' => trim($request->route),
                        'exit' => trim($request->exit_date),
                        'coadmin_name' => trim($request->coadmin_name),
                        'coadmin_family' => trim($request->coadmin_family),
                        'coadmin_melli' => trim($request->coadmin_melli),
                        'coadmin_birthdate' => trim($request->coadmin_birthdate),
                        'coadmin_mobile' => trim($request->coadmin_mobile),
                        'coadmin_email' => trim($request->coadmin_email),
                        'coadmin_shenasname' => trim($request->coadmin_shenasname),
                        'coadmin_fathername' => trim($request->coadmin_fathername),
                        'coadmin_education' => trim($request->coadmin_edu),
                        'coadmin_sex' => trim($request->coadmin_sex),
                        'rowhani_name' => trim($request->rowhani_name),
                        'rowhani_family' => trim($request->rowhani_family),
                        'rowhani_melli' => trim($request->rowhani_melli),
                        'rowhani_code' => trim($request->rowhani_code),
                        'rowhani_birthdate' => trim($request->rowhani_birthdate),
                        'rowhani_mobile' => trim($request->rowhani_mobile),
                        'rowhani_email' => trim($request->rowhani_email),
                        'rowhani_shenasname' => trim($request->rowhani_shenasname),
                        'rowhani_fathername' => trim($request->rowhani_fathername),
                        'rowhani_education' => trim($request->rowhani_edu),
                        'rowhani_sex' => trim($request->rowhani_sex),
                        'connect_name' => trim($request->connect_name),
                        'connect_family' => trim($request->connect_family),
                        'connect_melli' => trim($request->connect_melli),
                        'connect_birthdate' => trim($request->connect_birthdate),
                        'connect_mobile' => trim($request->connect_mobile),
                        'connect_email' => trim($request->connect_email),
                        'connect_shenasname' => trim($request->connect_shenasname),
                        'connect_fathername' => trim($request->connect_fathername),
                        'connect_education' => trim($request->connect_edu),
                        'connect_sex' => trim($request->connect_sex),
                        'pilgrim_man' => trim($request->man),
                        'pilgrim_man_old' => trim($request->man_old),
                        'pilgrim_woman' => trim($request->woman),
                        'pilgrim_woman_old' => trim($request->woman_old),
                        'timestamp' => Carbon::now()->timestamp,


                    ]);
            } catch (Exception $e) {
                response()->json(['hasError' => 'yes', 'result' => 'خطا در ارتباط با دیتابیس']);
                die();
            }
            return response()->json(['hasError' => 'no', 'result' => 'مشخصات کاروان به روز شد']);
        } else {

            return response()->json(['hasError' => 'yes', $validator->errors()->all()]);
        }
    }


    public function renderAdmin()
    {
        return view('administrator');
    }
    
   

    public function renderAdmin_home()
    {
        return view('administrator_home');
    }

    public function renderAdmin_pilgrim()
    {
        return view('administrator_pilgrim');
    }

    public function fetchAllData(Request $request)
    {
        try {
            $caravan_data = Caravanmysql::where('admin_melli', '=', $request->adminMelliCode)->first();
        } catch (Exception $e) {
            response()->json(['hasError' => 'yes', 'result' => 'خطا در ارتباط با دیتابیس']);
            exit;
        }
        if ($caravan_data != null) {
            return response()->json(['hasError' => 'no', 'result' => $caravan_data]);
        } else {
            return response()->json(['hasError' => 'yes', 'result' => 'کد ملی مدیر یافت نشد']);
        }
    }

    public function caravanFinalCheck(Request $request)
    {
        try {
            $caravan_data = Caravanmysql::where('caravan_UUID', '=', $request->cuid)
                ->where('caravan_human_id', '=', $request->fno)->first();
        } catch (Exception $e) {
            response()->json(['hasError' => 'yes', 'result' => 'خطا در ارتباط با دیتابیس']);
            exit;
        }

        if ($caravan_data != null) {
            try {
                Caravanmysql::where('caravan_UUID', '=', $request->cuid)
                    ->where('caravan_human_id', '=', $request->fno)
                    ->update([
                        'verified' => 'Yes',
                    ]);
            } catch (Exception $e) {
                return response()->json(['hasError' => 'yes', 'result' => 'خطا در تایید کاروان']);
                exit;
            }
            return response()->json(['hasError' => 'no', 'result' => 'کاروان با موفقیت تایید شد']);
        } else {
            return response()->json(['hasError' => 'yes', 'result' => 'کاروان مورد نظر یافت نشد']);
        }
    }
}
