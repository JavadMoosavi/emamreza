<?php

namespace App\Http\Controllers;

use App\Models\Caravanmysql;
use App\Models\Homeadminmysql;
use App\Models\Homemysql;
use App\Models\Pilgrimmysql;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pinfo(Request $request)
    {
        
        try {
            $caravan_data = Caravanmysql::where('caravan_UUID', '=', $request->UID)->first();
        } catch (Exception $e) {
            return view('errorPage', ['errorCode' => 'خطایی در ارتباط با دیتابیس رخ داده است']);
            exit;
        }

        if ($caravan_data != null) {
            return response()->json(['status' => 'OK', 'pdata' => $caravan_data]);
        } else {
            return response()->json(['status' => 'ERROR']);
        }
    }

    public function fetchHomeData()
    {
        //Get Home data
        try {
            $home_data = Homemysql::where('home_UUID', '=', session('homeUUID'))->first();
        } catch (Exception $e) {
            return view('errorPage', ['errorCode' => 'خطایی در ارتباط با دیتابیس رخ داده است']);
            exit;
        }

        //Get Home servant data
        try {
            $home_servant_data = Homeadminmysql::where('home_UUID', '=', session('homeUUID'))->get();
        } catch (Exception $e) {
            return view('errorPage', ['errorCode' => 'خطایی در ارتباط با دیتابیس رخ داده است']);
            exit;
        }

        //Get Home pilgrim data
        try {
            $home_pilgrim_data1 = Pilgrimmysql::where('pilgrim_home_UUID', '=', session('homeUUID'))->get();
            $home_pilgrim_data = $home_pilgrim_data1->sortBy('pilgrim_family');
        } catch (Exception $e) {
            return view('errorPage', ['errorCode' => 'خطایی در ارتباط با دیتابیس رخ داده است']);
            exit;
        }


        if ($home_data == null) {
            //If no data found, redirect to login page
            return redirect()->route('login');
        } else {
            return view('home', ['home_data' => $home_data, 'servant_data' => $home_servant_data, 'pilgrim_data' => $home_pilgrim_data]);
        }
    }

    public function homeValidation(Request $request)
    {
        // dd($request->homeUUID, $request->pilgrim_UUID);

        //if user does not login as home administrator cannot verify Pilgrims
        if (!session()->has('homeUUID')) {
            abort(403);
            exit();
        }

        try {
            $Home_Validation = Pilgrimmysql::where('pilgrim_home_UUID', '=', $request->homeUUID)
                ->where('pilgrim_UUID', '=', $request->pilgrimUUID)
                ->first();
        } catch (Exception $e) {
            return view('errorPage', ['errorCode' => 'خطایی در ارتباط با دیتابیس رخ داده است']);
            exit;
        }

        // return count($Home_Validation);

        if ($Home_Validation != null && $Home_Validation->pilgrim_home_UUID == session('homeUUID')) {
            return view('homeValidation', ['Status' => 'success', 'homeName' => session('home_name'), 'pilgrimName' => $Home_Validation->pilgrim_name . ' ' . $Home_Validation->pilgrim_family]);
        } else {
            return view('homeValidation', ['Status' => 'error']);
        }
    }
}
