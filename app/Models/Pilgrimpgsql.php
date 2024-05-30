<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilgrimpgsql extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $table = 'pilgrimpgsqls';

    protected $fillable = [
        'pilgrim_UUID',
        'pilgrim_caravan_UUID',
        'pilgrim_name',
        'pilgrim_family',
        'pilgrim_melli',
        'pilgrim_birthdate',
        'pilgrim_mobile',
        'pilgrim_email',
        'pilgrim_shenasname',
        'pilgrim_fathername',
        'pilgrim_education',
        'pilgrim_sex',
        'pilgrim_province',
        'pilgrim_city',
        'pilgrim_home_UUID',
    ];
}
