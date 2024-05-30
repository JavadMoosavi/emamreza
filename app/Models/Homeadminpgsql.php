<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeadminpgsql extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $table = 'homeadminpgsqls';

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
