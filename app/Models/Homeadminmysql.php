<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeadminmysql extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'homeadminmysqls';

    protected $fillable = [
        'home_UUID',
        'name',
        'family',
        'fathername',
        'melli',
        'mobile',
        'phone',
        'birthday',
        'shenasname',
        'sex',
        'job',
        'home_job',
        'address',
        'province',
        'city',
        'email',
        'role',
        'status',
        'timestamp',
    ];
}
