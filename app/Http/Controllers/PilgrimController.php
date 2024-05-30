<?php

namespace App\Http\Controllers;

use App\Models\Caravanmysql;
use App\Models\Homemysql;
use App\Models\Pilgrimmysql;
use Exception;
use Illuminate\Http\Request;

class PilgrimController extends Controller
{
    public function fetchPilgrimData()
    {

        //Get Pilgrim data
        try {
            $pilgrim_data = Pilgrimmysql::where('pilgrim_UUID', '=', session('pilgrimUUID'))->first();
        } catch (Exception $e) {
            return view('errorPage', ['errorCode' => 'خطایی در ارتباط با دیتابیس رخ داده است']);
            exit;
        }

        //Get Home data
        try {
            $home_data = Homemysql::where('home_UUID', '=', $pilgrim_data->pilgrim_home_UUID)->first();
        } catch (Exception $e) {
            return view('errorPage', ['errorCode' => 'خطایی در ارتباط با دیتابیس رخ داده است']);
            exit;
        }

        

        //Get Home data
        try {
            $caravan_data = Caravanmysql::where('caravan_UUID', '=', $pilgrim_data->pilgrim_caravan_UUID)->first();
        } catch (Exception $e) {
            return view('errorPage', ['errorCode' => 'خطایی در ارتباط با دیتابیس رخ داده است']);
            exit;
        }

        if ($pilgrim_data == null) {
            //If no data found, redirect to login page
            return redirect()->route('login');
        } else {

            //Check if Home and Caravan assigned to Pilgrim
            if ($home_data != null && $caravan_data != null) {
                return view('pilgrim', ['caravan_data' => $caravan_data, 'home_data' => $home_data, 'pilgrim_data' => $pilgrim_data, 'QR' => asset('hv/' . $pilgrim_data->pilgrim_home_UUID . '/' . $pilgrim_data->pilgrim_UUID)]);
            } else {
                return view('pilgrim', ['pilgrim_data' => $pilgrim_data, 'QR'=>'0']);
            }
        }
    }
}
