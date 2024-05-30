<?php

namespace App\Http\Controllers;

use App\Models\Caravanmysql;
use App\Models\Homeadminmysql;
use App\Models\Homemysql;
use App\Models\Loginmysql;
use App\Models\Pilgrimmysql;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{


    //
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    public function loginProccessor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
            'captcha' => 'captcha',
        ]);

        if ($validator->passes()) {

            //add try/catch to this section
            
            $result = Loginmysql::where('admin_melli', '=', $request->username)->first();
            if ($result != null) //On Success
            {
                //Check Password
                if (Hash::check($request->password, $result->password)) {

                    //Redirect to corresponding page
                    if ($result->role == 'carvan_admin') {      //Caravan Admin
                        session(['caravanUUID' => $result->caravan_UUID]);
                        session(['caravan_admin_family' => Caravanmysql::where('caravan_UUID', '=', $result->caravan_UUID)->first()->admin_family]); //Retrive Caravan Admin Name
                        return response()->json(['errorCode' => '0', 'errorMsg' => '0', 'page' => '/caravan']);
                    }
                    else if ($result->role == 'home_admin') {   //Home Admin
                        session(['homeUUID' => $result->caravan_UUID]);
                        session(['home_admin_family' => Homeadminmysql::where('home_UUID', '=', $result->caravan_UUID)->first()->family]); //Retrive Home Admin Name
                        session(['home_name' => Homemysql::where('home_UUID', '=', $result->caravan_UUID)->first()->home_name]); //Retrive Home Name
                        return response()->json(['errorCode' => '0', 'errorMsg' => '0', 'page' => '/home']);
                    }
                    else if ($result->role == 'pilgrim') {   //Pilgrim
                        session(['pilgrimUUID' => $result->caravan_UUID]);
                        session(['pilgrim_family' => Pilgrimmysql::where('pilgrim_UUID', '=', $result->caravan_UUID)->first()->pilgrim_family]); //Retrive Pilgrim Family
                        return response()->json(['errorCode' => '0', 'errorMsg' => '0', 'page' => '/pilgrim']);
                    }
                    
                } else {
                    return response()->json(['errorCode' => '1', 'errorMsg' => 'رمز عبور صحیح نیست']);
                }
            } else {
                return response()->json(['errorCode' => '1', 'errorMsg' => 'کاربری با مشخصات درج شده پیدا نشد']);
            }
        } else {
            return response()->json(['errorCode' => '1', 'errorMsg' => 'فرم به درستی تکمیل نشده و یا کد امنیتی صحیح نیست']);
        }
    }
}
