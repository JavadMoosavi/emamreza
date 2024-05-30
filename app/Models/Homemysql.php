<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homemysql extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'homemysqls';

    protected $fillable = [
        'home_UUID',
        'home_human_id',
        'home_admin_melli',
        'home_admin_name',
        'home_admin_family',
        'home_admin_mobile',
        'home_name',
        'home_servant',
        'home_type',
        'home_capacity_man',
        'home_capacity_woman',
        'home_phone',
        'home_route',
        'home_address',
        'home_latitude',
        'home_longitude',
        'home_self-sufficiency',
        'home_status',
    ];
}
