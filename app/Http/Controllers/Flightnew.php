<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Flightmysql;
use App\Models\Visitormysql;
use App\Models\Loginmysql;
use App\Models\Visitorpgsql;
use App\Models\Caravanmysql;
use App\Models\Caravanpgsql;
use App\Models\Loginpgsql;
use App\Models\Testmysql;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Flightnew extends Controller
{

    public function savecaravan(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'family' => 'required',
            'melli' => 'required|numeric|digits:10',
            'birthday' => 'required|size:10',
            'mobile' => 'required|numeric|digits:11|starts_with:09',
            'shenasname' => 'required|numeric',
            'fathername' => 'required|min:2',
            'education' => 'required|min:2',
            'sex' => 'required|min:2',
            'caravan' => 'required|min:2',
            'city' => 'required|min:2',
            'province' => 'required|min:2',
            'address' => 'required|min:2',
            'phone' => 'required|numeric|digits:11|starts_with:0',
            'zipcode' => 'required|numeric|digits:10',
        ]);

        if ($validator->passes()) {

            $UUID = (string) Str::uuid();

            $TrackingCode = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . "-" . Caravanmysql::all()->count() + 10000;

            session(['TrackingCode' => $TrackingCode]);

            $dbData = [

                'caravan_UUID' => trim($UUID),
                'caravan_human_id' => trim($TrackingCode),
                'admin_name' => trim($request->name),
                'admin_family' => trim($request->family),
                'admin_melli' => trim($request->melli),
                'admin_birthdate' => trim($request->birthday),
                'admin_mobile' => trim($request->mobile),
                'admin_email' => trim($request->email),
                'admin_shenasname' => trim($request->shenasname),
                'admin_fathername' => trim($request->fathername),
                'admin_education' => trim($request->education),
                'admin_sex' => trim($request->sex),
                'admin_city' => trim($request->city),
                'admin_province' => trim($request->province),
                'admin_village' => trim($request->village),
                'admin_address' => trim($request->address),
                'admin_phone' => trim($request->phone),
                'admin_zipcode' => trim($request->zipcode),
                'caravan_name' => trim($request->caravan),
                'start_date' => '0',
                'duration' => '0',
                'entrance' => '0',
                'exit' => '0',
                'coadmin_name' => '0',
                'coadmin_family' => '0',
                'coadmin_melli' => '0',
                'coadmin_birthdate' => '0',
                'coadmin_mobile' => '0',
                'coadmin_email' => '0',
                'coadmin_shenasname' => '0',
                'coadmin_fathername' => '0',
                'coadmin_education' => '0',
                'coadmin_sex' => '0',
                'rowhani_name' => '0',
                'rowhani_family' => '0',
                'rowhani_melli' => '0',
                'rowhani_code' => '0',
                'rowhani_birthdate' => '0',
                'rowhani_mobile' => '0',
                'rowhani_email' => '0',
                'rowhani_shenasname' => '0',
                'rowhani_fathername' => '0',
                'rowhani_education' => '0',
                'rowhani_sex' => '0',
                'connect_name' => '0',
                'connect_family' => '0',
                'connect_melli' => '0',
                'connect_birthdate' => '0',
                'connect_mobile' => '0',
                'connect_email' => '0',
                'connect_shenasname' => '0',
                'connect_fathername' => '0',
                'connect_education' => '0',
                'connect_sex' => '0',
                'pilgrim_man' => '0',
                'pilgrim_man_old' => '0',
                'pilgrim_woman' => '0',
                'pilgrim_woman_old' => '0',
                'pilgrim_man_home' => '0',
                'pilgrim_woman_home' => '0',
                'route' => '0',
                'verified' => 'No',
                'timestamp' => Carbon::now()->timestamp,
            ];

            // Check melli duplicate
            $caravanMelliCheck = Caravanmysql::where('admin_melli', $request->melli)->first();
            if ($caravanMelliCheck != null) { //We have duplicated melli code
                return response()->json(['errorCode' => '1', 'message' => 'repeated melli code']);
                die();
            }

            // Check mobile duplicate
            $caravanMobileCheck = Caravanmysql::where('admin_mobile', $request->mobile)->first();
            if ($caravanMobileCheck != null) { //We have duplicated mobile code
                return response()->json(['errorCode' => '2', 'message' => 'repeated mobile code']);
                die();
            }

            // Register to MySQL
            try {
                Caravanmysql::create($dbData);
            } catch (Exception $e) {
                return response()->json(['errorCode' => '3', 'message' => 'خطا در ارتباط با کاروان مای اسکیوال']);
                exit();
            }

            // Register to PgSQL
            // try {
            //     Caravanpgsql::create($dbData);
            // } catch (Exception $e) {
            //     return response()->json(['errorCode' => '3', 'message' => 'خطا در ارتباط با pgsql', 'err' => $e]);
            //     exit();
            // }

            //Create Login
            try {
                Loginmysql::create([
                    'caravan_UUID' => trim($UUID),
                    'admin_melli' => trim($request->melli),
                    'password' => Hash::make($request->mobile),
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'role' => 'carvan_admin'
                ]);
            } catch (Exception $e) {
                return response()->json(['errorCode' => '3', 'message' => 'خطا در ارتباط با لاگین مای']);
                exit();
            }

            //Create Login PgSQL
            // try {
            //     Loginpgsql::create([
            //         'caravan_UUID' => trim($UUID),
            //         'admin_melli' => trim($request->melli),
            //         'password' => Hash::make($request->mobile),
            //         'email' => $request->email,
            //         'mobile' => $request->mobile,
            //         'role' => 'carvan_admin'
            //     ]);
            // } catch (Exception $e) {
            //     return response()->json(['errorCode' => '3', 'message' => 'خطا در ارتباط با لاگین پی']);
            //     exit();
            // }

            return response()->json(['errorCode' => '0', 'message' => 'OK']);
        } else {
            $errors = $validator->errors();
            return response()->json(['errorCode' => '3', 'message' => 'validation failed']);
        }
    }


    public function saveData()
    {

        $UUID = (string) Str::uuid();

        $dbData = [
            'name' => 'جواد',
            'family' => 'موسوی',
            'melli' => '0921715353',
            'birthdate' => '1371/01/18',
            'mobile' => '09388371320',
            'email' => 'xenon2moosavi@gmail.com',
            'role' => 'administrator',
            'state' => 'notActive',
            'UUID' => $UUID,
            'timestamp' => Carbon::now()->timestamp,
        ];



        $flight = Visitorpgsql::create($dbData);

        $flightmysql = Visitormysql::create($dbData);

        return $flight . "<br/>" . $flightmysql;
    }

   
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    public function loginProccessorchk(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
            'captcha' => 'captcha',
        ]);



        if ($validator->passes()) {

            $result = Loginmysql::where('admin_melli', '=', '0921781350')->first();
            if ($result != null) //On Success
            {

                return response()->json(['errorCode' => '1', 'errorMsg' => $result->role]);
                // //Check Password
                // if (Hash::check($request->password, $result->password)) {
                //     session(['caravanUUID' => $result->caravan_UUID]);
                //     return response()->json(['errorCode' => '0', 'errorMsg' => '0']);
                // } else {
                //     return response()->json(['errorCode' => '1', 'errorMsg' => 'رمز عبور صحیح نیست']);
                // }
                // } else {
                //     return response()->json(['errorCode' => '1', 'errorMsg' => 'کاربری با مشخصات درج شده پیدا نشد']);
            }
        } else {
            return response()->json(['errorCode' => '1', 'errorMsg' => 'فرم به درستی تکمیل نشده است']);
        }
    }
}
