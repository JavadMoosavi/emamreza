<?php
//السلام علیک یا علی ابن موسی الرضا (ع)
// تقدیم به پیشگاه مقدس امام رئوف، حضرت رضا (ع) به امید گوشه چشمی
namespace App\Http\Controllers;

use App\Models\Caravanmysql;
use App\Models\Homemysql;
use App\Models\Pilgrimmysql;
use App\Models\Pilgrimpgsql;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use Exception;

class CaravanController extends Controller
{
    //

    public function pilgrimTable()
    {
        // // session('caravanUUID')
        if(!session()->has('caravanUUID'))
        {
            die();
        }
        
        $pilgrimData = Pilgrimmysql::where('pilgrim_caravan_UUID', '=', session('caravanUUID'))->get();

        $tableData = null;

        for($i = 0; $i < count($pilgrimData); $i++)
        {
            $tableData = $tableData .
            "<tr>
            <td>" . $i + 1 . "</td>
            <td>" . $pilgrimData[$i]->pilgrim_name . " " . $pilgrimData[$i]->pilgrim_family . "</td>
            <td>" . $pilgrimData[$i]->pilgrim_melli . "</td>
            <td>" . $pilgrimData[$i]->pilgrim_mobile . "</td></tr>";
        }

        return response()->json(['result' => $tableData]);
        // return response()->json(['hasError' => session('caravanUUID')]);
    }

    public function pilgrimRegisterShow()
    {
        $caravan_data = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))->first();
        if ($caravan_data == null) {
            //If no data found, redirect to login page
            return redirect()->route('login');
        } else {
            return view('pilgrimRegister', ['caravan_UUID' => $caravan_data->caravan_UUID]);
        }
    }


    public function caravanHomeInfoShow()
    {
        $caravan_data = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))->first();
        if ($caravan_data == null) {
            //If no data found, redirect to login page
            return redirect()->route('login');
        } else {
            //Retrieve Home Data
            if($caravan_data->pilgrim_woman_home == null || $caravan_data->pilgrim_woman_home == '0') {
                $woman_Home = '0';
            }
            else
            {
                $woman_Home = Homemysql::where('home_UUID', '=', $caravan_data->pilgrim_woman_home)->first();
                if($woman_Home == null) { $woman_Home = '0'; }
            }

            if($caravan_data->pilgrim_man_home == null || $caravan_data->pilgrim_man_home == '0') {
                $man_Home = '0';
            }
            else
            {
                $man_Home = Homemysql::where('home_UUID', '=', $caravan_data->pilgrim_man_home)->first();
                if($man_Home == null) { $man_Home = '0'; }
            }

            return view('caravanHomeInfoShow', ['caravan_UUID' => $caravan_data->caravan_UUID, 'man_Home' => $man_Home, 'woman_Home' => $woman_Home]);
        }
    }

    public function pilgrimSave(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'pilgrim_melli' => 'required|size:10',
                'pilgrim_name' => 'required',
                'pilgrim_family' => 'required',
                'pilgrim_shenasname' => 'required|numeric',
                'pilgrim_birthdate' => 'required|size:10',
                'pilgrim_mobile' => 'required|numeric|digits:11|starts_with:09',
                'pilgrim_edu' => 'required|doesnt_start_with:0',
                'pilgrim_sex' => 'required|doesnt_start_with:0',
                'pilgrim_fathername' => 'required',
                'cu' => 'required', //Caravan UUID
            ],
            [
                'pilgrim_name.required' => 'نام زائر وارد نشده است',
                'pilgrim_family.required' => 'نام خانوادگی زائر وارد نشده است',
                'pilgrim_melli.required' => 'ثبت کد ملی ضروری است',
                'pilgrim_melli.size' => 'کد ملی باید ده رقم باشد است',
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
                'cu.required' => 'خطای داخلی سرور',
            ]
        );

        if ($validator->passes()) {
            $pilgrim = Pilgrimmysql::where('pilgrim_melli', '=', $request->pilgrim_melli)->first();
            if ($pilgrim == null) { //Register new pilgrim

                $pilgrim_UUID = (string) Str::uuid();

                $pilgrimData = [
                    'pilgrim_UUID' => $pilgrim_UUID,
                    'pilgrim_caravan_UUID' => $request->cu,
                    'pilgrim_name' => trim($request->pilgrim_name),
                    'pilgrim_family' => trim($request->pilgrim_family),
                    'pilgrim_melli' => trim($request->pilgrim_melli),
                    'pilgrim_birthdate' => trim($request->pilgrim_birthdate),
                    'pilgrim_mobile' => trim($request->pilgrim_mobile),
                    'pilgrim_email' => trim($request->pilgrim_email),
                    'pilgrim_shenasname' => trim($request->pilgrim_shenasname),
                    'pilgrim_fathername' => trim($request->pilgrim_fathername),
                    'pilgrim_education' => trim($request->pilgrim_edu),
                    'pilgrim_sex' => trim($request->pilgrim_sex),
                    'pilgrim_home_UUID' => '0',


                ];

                // Pilgrimpgsql::create($pilgrimData);
                Pilgrimmysql::create($pilgrimData);

                return response()->json(['hasError' => '0', 'msg' => 'ثبت اطلاعات زائر با موفقیت انجام شد']);
                // return response()->json(['hasError' => '0', 'msg' => session('caravanUUID')]);
            } elseif ($pilgrim != null && ($pilgrim->pilgrim_caravan_UUID == 0 || $pilgrim->pilgrim_caravan_UUID == $request->cu)) {
                //Update old pilgrim data
                $pilgrim_UUID = (string) Str::uuid();

                //Two mode 1: if pilgrim has UUID, keep it
                if ($pilgrim->pilgrim_UUID != 0) {
                    Pilgrimmysql::where('pilgrim_melli', '=', $request->pilgrim_melli)
                        ->update([
                            // 'pilgrim_UUID' => $pilgrim_UUID,
                            'pilgrim_caravan_UUID' => $request->cu,
                            'pilgrim_name' => trim($request->pilgrim_name),
                            'pilgrim_family' => trim($request->pilgrim_family),
                            // 'pilgrim_melli' => trim($request->pilgrim_melli),
                            'pilgrim_birthdate' => trim($request->pilgrim_birthdate),
                            'pilgrim_mobile' => trim($request->pilgrim_mobile),
                            'pilgrim_email' => trim($request->pilgrim_email),
                            'pilgrim_shenasname' => trim($request->pilgrim_shenasname),
                            'pilgrim_fathername' => trim($request->pilgrim_fathername),
                            'pilgrim_education' => trim($request->pilgrim_edu),
                            'pilgrim_sex' => trim($request->pilgrim_sex),
                            'pilgrim_home_UUID' => '0',
                        ]);
                }

                //Two mode 2: if pilgrim doesn't have UUID, generate one
                elseif ($pilgrim->pilgrim_UUID == 0) {
                    Pilgrimmysql::where('pilgrim_melli', '=', $request->pilgrim_melli)
                        ->update([
                            'pilgrim_UUID' => $pilgrim_UUID,
                            'pilgrim_caravan_UUID' => $request->cu,
                            'pilgrim_name' => trim($request->pilgrim_name),
                            'pilgrim_family' => trim($request->pilgrim_family),
                            // 'pilgrim_melli' => trim($request->pilgrim_melli),
                            'pilgrim_birthdate' => trim($request->pilgrim_birthdate),
                            'pilgrim_mobile' => trim($request->pilgrim_mobile),
                            'pilgrim_email' => trim($request->pilgrim_email),
                            'pilgrim_shenasname' => trim($request->pilgrim_shenasname),
                            'pilgrim_fathername' => trim($request->pilgrim_fathername),
                            'pilgrim_education' => trim($request->pilgrim_edu),
                            'pilgrim_sex' => trim($request->pilgrim_sex),
                            'pilgrim_home_UUID' => '0',
                        ]);
                }
                return response()->json(['hasError' => '0', 'msg' => 'به روز رسانی اطلاعات زائر با موفقیت انجام شد']);
            } else {
                return response()->json(['hasError' => '1', 'msg' => 'زائر قبلا در کاروانی دیگر ثبت نام شده است و امکان ثبت مجدد نیست']);
            }
        } else {
            return response()->json(['hasError' => '1', 'msg' => $validator->errors()->first()]);
        }
    }

    public function pilgrimAvailableCheck(Request $request)
    {
        $pilgrim = Pilgrimmysql::where('pilgrim_melli', '=', $request->pilgrim_melli)->first();

        if ($pilgrim != null && ($pilgrim->pilgrim_caravan_UUID == 0 || $pilgrim->pilgrim_caravan_UUID == $request->cu)) {
            return response()->json($pilgrim);
        } elseif ($pilgrim != null && $pilgrim->pilgrim_caravan_UUID != $request->cu) {
            return response()->json(['hasError' => '1', 'msg' => 'زائر در کاروانی دیگر ثبت نام شده است']);
        }
    }

    public function fetchCaravanData()
    {
        try {
            $caravan_data = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))->first();
        } catch (Exception $e) {
            return view('errorPage', ['errorCode' => 'خطایی در ارتباط با دیتابیس رخ داده است']);
            exit;
        }


        if ($caravan_data == null) {
            //If no data found, redirect to login page
            return redirect()->route('login');
        } else {
            return view('caravan', ['caravan_data' => $caravan_data]);
        }
    }

    public function saveCaravanDetail(Request $request)
    {
        //Check if the user can update the caravan details
        $result = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))->first();
        if ($result == null || $result->start_date != 0) {
            return response()->json(['errorCode' => '1', 'errorMsg' => 'امکان ثبت مجدد مشخصات وجود ندارد']);
            die();
        }

        // Validate data
        $validator = Validator::make($request->all(), [

            'start_date' => 'required|size:10',
            'days' => 'required|doesnt_start_with:0',
            'entrance_date' => 'required|doesnt_start_with:0',
            'exit_date' => 'required|doesnt_start_with:0',
            'man' => 'required|numeric',
            'man_old' => 'required|numeric|doesnt_start_with:0',
            'woman' => 'required|numeric|doesnt_start_with:0',
            'woman_old' => 'required|numeric|doesnt_start_with:0',
            'route' => 'required|doesnt_start_with:0',
        ]);

        if ($validator->passes()) {

            $result = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))
                ->update([
                    'start_date' => trim($request->start_date),
                    'duration' => trim($request->days),
                    'route' => trim($request->route),
                    'entrance' => trim($request->entrance_date),
                    'exit' => trim($request->exit_date),
                    'pilgrim_man' => trim($request->man),
                    'pilgrim_man_old' => trim($request->man_old),
                    'pilgrim_woman' => trim($request->woman),
                    'pilgrim_woman_old' => trim($request->woman_old),
                ]);

            return response()->json(['errorCode' => '0', 'errorMsg' => 'مشخصات به روز شد']);
        } else {
            return response()->json(['errorCode' => '1', 'errorMsg' => 'وارد کردن تمامی فیلدها الزامی است و تاریخ ها لزوما از تقویم نمایش داده شده انتخاب شود']);
        }
    }


    public function saveCaravanCoadmin(Request $request)
    {
        //Check if the user can update the caravan details
        $result = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))->first();
        if ($result == null || $result->coadmin_name != 0) {
            return response()->json(['errorCode' => '1', 'errorMsg' => 'امکان ثبت مجدد مشخصات وجود ندارد']);
            die();
        }

        // Validate data
        $validator = Validator::make(
            $request->all(),
            [

                'coadmin_name' => 'required|not_in:0',
                'coadmin_family' => 'required',
                'coadmin_melli' => 'required|size:10',
                'coadmin_shenasname' => 'required|numeric',
                'coadmin_birthdate' => 'required|size:10',
                'coadmin_mobile' => 'required|numeric|digits:11|starts_with:09',
                'coadmin_edu' => 'required|min:2',
                'coadmin_sex' => 'required|max:5',
                'coadmin_fathername' => 'required',
            ],

            [
                'coadmin_name.required' => 'نام معاون کاروان وارد نشده است',
                'coadmin_name.not_in' => 'نام معاون کاروان وارد نشده است',
                'coadmin_family.required' => 'نام خانوادگی معاون کاروان وارد نشده است',
                'coadmin_melli.required' => 'ثبت کد ملی ضروری است',
                'coadmin_melli.size' => 'کد ملی باید ده رقم باشد است',
                'coadmin_shenasname.required' => 'شماره شناسنامه باید به صورت عدد وارد شود',
                'coadmin_birthdate.required' => 'تاریخ تولد وارد نشده است',
                'coadmin_mobile.required' => 'موبایل وارد نشده است',
                'coadmin_mobile.numeric' => 'موبایل باید عدد باشد',
                'coadmin_mobile.digits' => 'موبایل باید 11 رقم باشد',
                'coadmin_mobile.starts_with' => 'موبایل با 09 شروع می شود',
                'coadmin_birthdate.size' => 'تاریخ تولد لزوما باید از تقویم نمایش داده شده ثبت شود',
                'coadmin_edu.required' => 'تحصیلات معاون کاروان وارد نشده است',
                'coadmin_edu.min' => 'تحصیلات معاون کاروان وارد نشده است',
                'coadmin_sex.required' => 'جنسیت معاون کاروان وارد نشده است',
                'coadmin_sex.max' => 'جنسیت معاون کاروان وارد نشده است',
                'coadmin_fathername.required' => 'نام پدر معاون کاروان وارد نشده است',
            ]
        );

        if ($validator->passes()) {

            $result = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))
                ->update([
                    'coadmin_name' => trim($request->coadmin_name),
                    'coadmin_family' => trim($request->coadmin_family),
                    'coadmin_melli' => trim($request->coadmin_melli),
                    'coadmin_birthdate' => trim($request->coadmin_birthdate),
                    'coadmin_mobile' => trim($request->coadmin_mobile),
                    'coadmin_shenasname' => trim($request->coadmin_shenasname),
                    'coadmin_fathername' => trim($request->coadmin_fathername),
                    'coadmin_education' => trim($request->coadmin_edu),
                    'coadmin_sex' => trim($request->coadmin_sex),
                    'coadmin_email' => trim($request->coadmin_email),
                ]);
            return response()->json(['errorCode' => '0', 'errorMsg' => 'مشخصات معاون کاروان به روز شد']);
        } else {
            // return response()->json(['errorCode' => '1', 'errorMsg' => 'وارد کردن تمامی فیلدها (غیر از ایمیل) الزامی است و تاریخ ها لزوما از تقویم نمایش داده شده انتخاب شود']);
            return response()->json(['errorCode' => '1', 'errorMsg' => $validator->errors()->first()]);
        }
    }


    public function saveCaravanRowhani(Request $request)
    {
        //Check if the user can update the caravan details
        $result = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))->first();
        if ($result == null || $result->rowhani_name != 0) {
            return response()->json(['errorCode' => '1', 'errorMsg' => 'امکان ثبت مجدد مشخصات وجود ندارد']);
            die();
        }

        // Validate data
        $validator = Validator::make(
            $request->all(),
            [

                'rowhani_name' => 'required|not_in:0',
                'rowhani_family' => 'required',
                'rowhani_melli' => 'required|size:10',
                'rowhani_shenasname' => 'required|numeric',
                'rowhani_birthdate' => 'required|size:10',
                'rowhani_mobile' => 'required|numeric|digits:11|starts_with:09',
                'rowhani_edu' => 'required|min:2',
                'rowhani_sex' => 'required|min:2',
                'rowhani_fathername' => 'required',
                'rowhani_code' => 'required',
            ],

            [
                'rowhani_name.required' => 'نام روحانی کاروان وارد نشده است',
                'rowhani_name.not_in' => 'نام روحانی کاروان وارد نشده است',
                'rowhani_family.required' => 'نام خانوادگی روحانی کاروان وارد نشده است',
                'rowhani_melli.required' => 'ثبت کد ملی ضروری است',
                'rowhani_melli.size' => 'کد ملی باید ده رقم باشد است',
                'rowhani_shenasname.required' => 'شماره شناسنامه باید به صورت عدد وارد شود',
                'rowhani_birthdate.required' => 'تاریخ تولد وارد نشده است',
                'rowhani_mobile.required' => 'موبایل وارد نشده است',
                'rowhani_mobile.numeric' => 'موبایل باید عدد باشد',
                'rowhani_mobile.digits' => 'موبایل باید 11 رقم باشد',
                'rowhani_mobile.starts_with' => 'موبایل با 09 شروع می شود',
                'rowhani_birthdate.size' => 'تاریخ تولد لزوما باید از تقویم نمایش داده شده ثبت شود',
                'rowhani_edu.required' => 'تحصیلات روحانی کاروان وارد نشده است',
                'rowhani_edu.min' => 'تحصیلات روحانی کاروان وارد نشده است',
                'rowhani_sex.required' => 'جنسیت روحانی کاروان وارد نشده است',
                'rowhani_sex.min' => 'جنسیت روحانی کاروان وارد نشده است',
                'rowhani_fathername.required' => 'نام پدر روحانی کاروان وارد نشده است',
                'rowhani_code.required' => 'ثبت کد روحانیت ضروری است',
            ]
        );

        if ($validator->passes()) {

            $result = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))
                ->update([
                    'rowhani_name' => trim($request->rowhani_name),
                    'rowhani_family' => trim($request->rowhani_family),
                    'rowhani_melli' => trim($request->rowhani_melli),
                    'rowhani_birthdate' => trim($request->rowhani_birthdate),
                    'rowhani_code' => trim($request->rowhani_code),
                    'rowhani_mobile' => trim($request->rowhani_mobile),
                    'rowhani_shenasname' => trim($request->rowhani_shenasname),
                    'rowhani_fathername' => trim($request->rowhani_fathername),
                    'rowhani_education' => trim($request->rowhani_edu),
                    'rowhani_sex' => trim($request->rowhani_sex),
                    'rowhani_email' => trim($request->rowhani_email),
                ]);
            return response()->json(['errorCode' => '0', 'errorMsg' => 'مشخصات روحانی کاروان به روز شد']);
        } else {
            // return response()->json(['errorCode' => '1', 'errorMsg' => 'وارد کردن تمامی فیلدها (غیر از ایمیل) الزامی است و تاریخ ها لزوما از تقویم نمایش داده شده انتخاب شود']);
            return response()->json(['errorCode' => '1', 'errorMsg' => $validator->errors()->first()]);
        }
    }


    public function saveCaravanConnect(Request $request)
    {
        //Check if the user can update the caravan details
        $result = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))->first();
        if ($result == null || $result->connect_name != 0) {
            return response()->json(['errorCode' => '1', 'errorMsg' => 'امکان ثبت مجدد مشخصات وجود ندارد']);
            die();
        }

        // Validate data
        $validator = Validator::make(
            $request->all(),
            [

                'connect_name' => 'required|not_in:0',
                'connect_family' => 'required',
                'connect_melli' => 'required|size:10',
                'connect_shenasname' => 'required|numeric',
                'connect_birthdate' => 'required|size:10',
                'connect_mobile' => 'required|numeric|digits:11|starts_with:09',
                'connect_edu' => 'required|min:2',
                'connect_sex' => 'required|min:2',
                'connect_fathername' => 'required',
            ],

            [
                'connect_name.required' => 'نام رابط کاروان وارد نشده است',
                'connect_name.not_in' => 'نام رابط کاروان وارد نشده است',
                'connect_family.required' => 'نام خانوادگی رابط کاروان وارد نشده است',
                'connect_melli.required' => 'ثبت کد ملی ضروری است',
                'connect_melli.size' => 'کد ملی باید ده رقم باشد است',
                'connect_shenasname.required' => 'شماره شناسنامه باید به صورت عدد وارد شود',
                'connect_birthdate.required' => 'تاریخ تولد وارد نشده است',
                'connect_mobile.required' => 'موبایل وارد نشده است',
                'connect_mobile.numeric' => 'موبایل باید عدد باشد',
                'connect_mobile.digits' => 'موبایل باید 11 رقم باشد',
                'connect_mobile.starts_with' => 'موبایل با 09 شروع می شود',
                'connect_birthdate.size' => 'تاریخ تولد لزوما باید از تقویم نمایش داده شده ثبت شود',
                'connect_edu.required' => 'تحصیلات رابط کاروان وارد نشده است',
                'connect_edu.min' => 'تحصیلات رابط کاروان وارد نشده است',
                'connect_sex.required' => 'جنسیت رابط کاروان وارد نشده است',
                'connect_sex.min' => 'جنسیت رابط کاروان وارد نشده است',
                'connect_fathername.required' => 'نام پدر رابط کاروان وارد نشده است',
            ]
        );

        if ($validator->passes()) {

            $result = Caravanmysql::where('caravan_UUID', '=', session('caravanUUID'))
                ->update([
                    'connect_name' => trim($request->connect_name),
                    'connect_family' => trim($request->connect_family),
                    'connect_melli' => trim($request->connect_melli),
                    'connect_birthdate' => trim($request->connect_birthdate),
                    'connect_mobile' => trim($request->connect_mobile),
                    'connect_shenasname' => trim($request->connect_shenasname),
                    'connect_fathername' => trim($request->connect_fathername),
                    'connect_education' => trim($request->connect_edu),
                    'connect_sex' => trim($request->connect_sex),
                    'connect_email' => trim($request->connect_email),
                ]);
            return response()->json(['errorCode' => '0', 'errorMsg' => 'مشخصات رابط کاروان به روز شد']);
        } else {
            // return response()->json(['errorCode' => '1', 'errorMsg' => 'وارد کردن تمامی فیلدها (غیر از ایمیل) الزامی است و تاریخ ها لزوما از تقویم نمایش داده شده انتخاب شود']);
            return response()->json(['errorCode' => '1', 'errorMsg' => $validator->errors()->first()]);
        }
    }
}
