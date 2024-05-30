<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\Caravanmysql;
use App\Models\Caravanpgsql;
use App\Models\Homeadminmysql;
use App\Models\Homemysql;
use App\Models\Loginmysql;
use App\Models\Pilgrimmysql;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use PgSql\Lob;

use Illuminate\Support\Facades\Crypt;

class Xlscontroller extends Controller
{

    public function homeadmindataupadte()
    {
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        $spreadsheet = $reader->load("hsdata.xlsx");
        for ($i = 2; $i <= 12; $i++) {
            Homeadminmysql::create([
                'home_UUID' => '14',
                'name' => $spreadsheet->getActiveSheet()->getCell('A'.$i)->getValue(),
                'family' => $spreadsheet->getActiveSheet()->getCell('B'.$i)->getValue(),
                'fathername' => $spreadsheet->getActiveSheet()->getCell('E'.$i)->getValue(),
                'melli' => $spreadsheet->getActiveSheet()->getCell('C'.$i)->getValue(),
                'mobile' => '0'.$spreadsheet->getActiveSheet()->getCell('F'.$i)->getValue(),
                'phone' => '0'.$spreadsheet->getActiveSheet()->getCell('F'.$i)->getValue(),
                'birthday' => '1350/12/10',
                'shenasname' => $spreadsheet->getActiveSheet()->getCell('D'.$i)->getValue(),
                'sex' => $spreadsheet->getActiveSheet()->getCell('G'.$i)->getValue(),
                'job' => $spreadsheet->getActiveSheet()->getCell('H'.$i)->getValue(),
                'home_job' => $spreadsheet->getActiveSheet()->getCell('I'.$i)->getValue(),
                'address' => $spreadsheet->getActiveSheet()->getCell('L'.$i)->getValue(),
                'province' => $spreadsheet->getActiveSheet()->getCell('J'.$i)->getValue(),
                'city' => $spreadsheet->getActiveSheet()->getCell('K'.$i)->getValue(),
                'email' => 'new@rocketmail.com',
                'role' => $spreadsheet->getActiveSheet()->getCell('M'.$i)->getValue(),
                'status' => 'Active',
                'timestamp' => Carbon::now()->timestamp,
            ]);
        }
    }

    public function readHomeData()
    {
        //Read an assing home personels information to Home data table

        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        $spreadsheet = $reader->load("hsdata.xlsx");

        // #1 Read HOME UUID form table
        $result = Homemysql::all();

        for ($i = 0; $i <= count($result) - 1; $i++) {

            for ($j = 2; $j <= 840; $j++) {

                if ($result->get($i)->home_UUID == $spreadsheet->getActiveSheet()->getCell('A' . $j)->getValue()) {



                    $melli = $spreadsheet->getActiveSheet()->getCell('W' . $j)->getValue();
                    if (strlen($melli) == 8) {
                        $melli = "00" . $melli;
                    } elseif (strlen($melli) == 9) {
                        $melli = "0" . $melli;
                    }



                    Homeadminmysql::create([
                        'home_UUID' => $result->get($i)->home_UUID,
                        'name' => $spreadsheet->getActiveSheet()->getCell('AC' . $j)->getValue(),
                        'family' => $spreadsheet->getActiveSheet()->getCell('AB' . $j)->getValue(),
                        'fathername' => $spreadsheet->getActiveSheet()->getCell('AA' . $j)->getValue(),
                        'melli' => $melli,
                        'mobile' => "0" . $spreadsheet->getActiveSheet()->getCell('T' . $j)->getValue(),
                        'phone' => $spreadsheet->getActiveSheet()->getCell('P' . $j)->getValue(),
                        'birthday' => $spreadsheet->getActiveSheet()->getCell('J' . $j)->getValue(),
                        'shenasname' => $spreadsheet->getActiveSheet()->getCell('U' . $j)->getValue(),
                        'sex' => 'نامشخص',
                        'job' => $spreadsheet->getActiveSheet()->getCell('R' . $j)->getValue(),
                        'home_job' => $spreadsheet->getActiveSheet()->getCell('G' . $j)->getValue(),
                        'address' => $spreadsheet->getActiveSheet()->getCell('H' . $j)->getValue(),
                        'province' => $spreadsheet->getActiveSheet()->getCell('C' . $j)->getValue(),
                        'city' => $spreadsheet->getActiveSheet()->getCell('Z' . $j)->getValue(),
                        'email' => $spreadsheet->getActiveSheet()->getCell('I' . $j)->getValue(),
                        'role' => $spreadsheet->getActiveSheet()->getCell('B' . $j)->getValue(),
                        'status' => '0',
                        'timestamp' => Carbon::now()->timestamp,
                    ]);
                }
            }
        }
    }

    public function readCaravanData()
    {
        // *** This function create caravan data and login data ***


        // // $spreadsheet = new Spreadsheet();
        // // $activeWorksheet = $spreadsheet->getActiveSheet();
        // // $activeWorksheet->setCellValue('A1', 'javad');
        // // $activeWorksheet->setCellValue('A2', 'hassan');
        // // $activeWorksheet->setCellValue('A3', 'akbar');
        // // $writer = new Xlsx($spreadsheet);
        // // $writer->save('myxla.xlsx');

        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        $spreadsheet = $reader->load("caravan.xlsx");


        $tableData = "<table border='1px'>
        <tr>
        <td>ردیف</td>
        <td>نام</td>
        <td>نام خانوادگی</td>
        <td>کد ملی</td>
        <td>شماره موبایل</td>
        <td>تاریخ تولد</td>
        </tr>";

        for ($i = 2; $i <= 20; $i++) {
            // $melli = $spreadsheet->getActiveSheet()->getCell('H'.$i)->getValue();
            // if(strlen($melli) == 8)
            // {
            //     $melli = "00". $melli;
            // }
            // elseif(strlen($melli) == 9)
            // {
            //     $melli = "0". $melli;
            // }

            //Save to database
            $UUID = (string) Str::uuid();

            $TrackingCode = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . "-" . Caravanmysql::all()->count() + 10000;



            $dbData = [

                'caravan_UUID' => trim($UUID),
                'caravan_human_id' => trim($TrackingCode),
                'admin_name' => trim($spreadsheet->getActiveSheet()->getCell('BX' . $i)->getValue()),
                'admin_family' => trim($spreadsheet->getActiveSheet()->getCell('BU' . $i)->getValue()),
                'admin_melli' => trim($spreadsheet->getActiveSheet()->getCell('BG' . $i)->getValue(), "/"),
                'admin_birthdate' => trim($spreadsheet->getActiveSheet()->getCell('J' . $i)->getValue()),
                'admin_mobile' => "0" . trim($spreadsheet->getActiveSheet()->getCell('AS' . $i)->getValue()),
                'admin_email' => trim($spreadsheet->getActiveSheet()->getCell('F' . $i)->getValue()),
                'admin_shenasname' => trim($spreadsheet->getActiveSheet()->getCell('AU' . $i)->getValue()),
                'admin_fathername' => trim($spreadsheet->getActiveSheet()->getCell('BT' . $i)->getValue()),
                'admin_education' => trim($spreadsheet->getActiveSheet()->getCell('N' . $i)->getValue()),
                'admin_sex' => trim($spreadsheet->getActiveSheet()->getCell('AG' . $i)->getValue()),
                'admin_city' => trim($spreadsheet->getActiveSheet()->getCell('AY' . $i)->getValue()),
                'admin_province' => trim($spreadsheet->getActiveSheet()->getCell('E' . $i)->getValue()),
                'admin_village' => trim($spreadsheet->getActiveSheet()->getCell('AI' . $i)->getValue()),
                'admin_address' => trim($spreadsheet->getActiveSheet()->getCell('C' . $i)->getValue()),
                'admin_phone' => "0" . trim($spreadsheet->getActiveSheet()->getCell('AE' . $i)->getValue()),
                'admin_zipcode' => trim($spreadsheet->getActiveSheet()->getCell('BK' . $i)->getValue()),
                'caravan_name' => trim($spreadsheet->getActiveSheet()->getCell('BV' . $i)->getValue()),
                'start_date' => '0',
                'duration' => '0',
                'entrance' => '0',
                'exit' => '0',
                'route' => '0',
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
                'pilgrim_man_old' => trim($spreadsheet->getActiveSheet()->getCell('U' . $i)->getValue()),
                'pilgrim_woman' => '0',
                'pilgrim_woman_old' => trim($spreadsheet->getActiveSheet()->getCell('W' . $i)->getValue()),
                'timestamp' => Carbon::now()->timestamp,
            ];


            Caravanmysql::create($dbData);
            // Caravanpgsql::create($dbData);
            //end Save to database

            $tableData = $tableData .
                "<tr>" .
                "<td>" . $i - 1 . "</td>" .
                "<td>" . $spreadsheet->getActiveSheet()->getCell('BX' . $i)->getValue() . "</td>" .
                "<td>" . $spreadsheet->getActiveSheet()->getCell('BU' . $i)->getValue() . "</td>" .
                "<td>" . trim($spreadsheet->getActiveSheet()->getCell('BG' . $i)->getValue(), "/") . "</td>" .
                // "<td>". $melli ."</td>".
                "<td>0" . $spreadsheet->getActiveSheet()->getCell('AS' . $i)->getValue() . "</td>" .
                "<td>" . $spreadsheet->getActiveSheet()->getCell('J' . $i)->getValue() . "</td></tr>";
        }

        $tableData = $tableData . "</table>";


        //Create Login data
        $result = Caravanmysql::all();

        for ($i = 0; $i <= 18; $i++) {

            Loginmysql::create([
                'caravan_UUID' => $result->get($i)->caravan_UUID,
                'admin_melli' => $result->get($i)->admin_melli,
                'password' => Hash::make($result->get($i)->admin_mobile),
                'email' => $result->get($i)->admin_email,
                'mobile' => $result->get($i)->admin_mobile,
                'role' => 'carvan_admin'
            ]);
        }


        // End Create Login data


        return ($tableData);
    }



    public function writexls()
    {
        // $spreadsheet = new Spreadsheet();
        // $activeWorksheet = $spreadsheet->getActiveSheet();
        // $activeWorksheet->setCellValue('A1', '0921781350');
        // $activeWorksheet->setCellValue('A2', '09154500261');
        // $activeWorksheet->setCellValueExplicit(
        //     'B4',
        //     '?000009154500261',
        //     \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING2
        // );
        // $writer = new Xlsx($spreadsheet);
        // $writer->save('myxla.xlsx');

        // $home_pilgrim_data = Pilgrimmysql::where('pilgrim_home_UUID', '=', '8bc8a70b-cef2-47b6-a7d2-0d8ff3fc3ce7')->get();

        // $x = $home_pilgrim_data->pluck('pilgrim_melli');


        // dd($home_pilgrim_data->get($x->search('1222438877'))->pilgrim_family);

        // $data = Pilgrimmysql::all();

        // $new_data = $data->pluck('pilgrim_caravan_UUID')->values()->all();

        // $newC = collect($new_data);

        // $newC->search('8bc8a70b-cef2-47b6-a7d2-0d8ff3fc3ce6');

        // $replaced = $newC->replace([$newC->search('8bc8a70b-cef2-47b6-a7d2-0d8ff3fc3ce6') => 'javad18moosavi']);

        // dd($newC, $replaced);






        // $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        // $reader->setReadDataOnly(TRUE);
        // $spreadsheet = $reader->load("pil.xlsx");

        // for ($i = 2; $i <= 5; $i++) {
        //     if ($spreadsheet->getActiveSheet()->getCell('A' . $i)->getValue() == '' || $spreadsheet->getActiveSheet()->getCell('A' . $i)->getValue() == null) {
        //         break;
        //     }
        //     echo "Name: " . $spreadsheet->getActiveSheet()->getCell('A' . $i)->getValue() . "<br/>";
        //     echo "Family: " . $spreadsheet->getActiveSheet()->getCell('B' . $i)->getValue() . "<br/>";
        //     echo "Melli: " . $spreadsheet->getActiveSheet()->getCell('C' . $i)->getValue() . "<br/>";
        //     echo "Mobile: " . $spreadsheet->getActiveSheet()->getCell('D' . $i)->getValue() . "<br/>";
        //     echo "S: " . $spreadsheet->getActiveSheet()->getCell('E' . $i)->getValue() . "<br/>";
        //     echo "City: " . $spreadsheet->getActiveSheet()->getCell('F' . $i)->getValue() . "<br/>";
        //     echo "Province: " . $spreadsheet->getActiveSheet()->getCell('G' . $i)->getValue() . "<br/>";
        //     echo "****************************<br/>";
        // }

        // $new = "موسوی";

        // $yy = "eyJpdiI6IldZanRxbWtnYnE0RjRiVlIvV3JxUUE9PSIsInZhbHVlIjoidDgzUVpBNS81KzRtRVVhRC9CelJDZz09IiwibWFjIjoiM2NjZTcxNTY4YmUwMjMzMDRkZGY2Nzg3ZDQ0MmVkNWYzOTZjODgxNzY2MjA0YjVlMzM2ZDllZmU5OWNkODM0ZSIsInRhZyI6IiJ9";
        // $enc = Crypt::encryptString($new);
        // // $enc = Crypt::decryptString($yy);
        // return($enc);

        $session_id = session()->getId();
        return($session_id);
    }
}
