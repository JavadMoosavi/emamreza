<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loginpgsql extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $table = 'loginpgsqls';

    protected $fillable = [
        'caravan_UUID',
        'admin_melli',
        'password',
        'email',
        'mobile',
        'role',
    ];
}
