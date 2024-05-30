<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loginmysql extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'loginmysqls';

    protected $fillable = [
        'caravan_UUID',
        'admin_melli',
        'password',
        'email',
        'mobile',
        'role',
    ];
    
}
