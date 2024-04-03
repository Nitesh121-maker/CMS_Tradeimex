<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webadmin extends Model
{
    use HasFactory;
    protected $table ='webadmins';
    protected  $fillable=[
        'admin_name',
        'admin_email' ,
        'admin_pass'
    ];
}
