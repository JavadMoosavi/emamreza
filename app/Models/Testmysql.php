<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testmysql extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'testmysqls';

    protected $fillable = [
            'caravan_UUID',
            'caravan_human_id',
            'admin_name',
            'admin_family',
            'admin_melli',
            'admin_birthdate',
            'admin_mobile',
            'admin_email',
            'admin_shenasname',
            'admin_fathername',
            'admin_education',
            'admin_sex',
            'admin_city',
            'admin_province',
            'admin_village',
            'admin_address',
            'admin_phone',
            'admin_zipcode',
            'caravan_name',
            'start_date',
            'duration',
            'entrance',
            'exit',
            'coadmin_name',
            'coadmin_family',
            'coadmin_melli',
            'coadmin_birthdate',
            'coadmin_mobile',
            'coadmin_email',
            'coadmin_shenasname',
            'coadmin_fathername',
            'coadmin_education',
            'coadmin_sex',
            'rowhani_name',
            'rowhani_family',
            'rowhani_melli',
            'rowhani_code',
            'rowhani_birthdate',
            'rowhani_mobile',
            'rowhani_email',
            'rowhani_shenasname',
            'rowhani_fathername',
            'rowhani_education',
            'rowhani_sex',
            'connect_name',
            'connect_family' ,
            'connect_melli',
            'connect_birthdate',
            'connect_mobile',
            'connect_email',
            'connect_shenasname' ,
            'connect_fathername',
            'connect_education',
            'connect_sex',
            'pilgrim_man',
            'pilgrim_man_old',
            'pilgrim_woman',
            'pilgrim_woman_old',
            'route',
            'verified',
            'timestamp',
    ];
}
