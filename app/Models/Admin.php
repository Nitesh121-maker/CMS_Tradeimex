<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $table = 'webadmins';
    protected $fillable = [
        'admin_name',
        'admin_email',
        'password'
    ];
    // Specify the password attribute explicitly
    public function getAuthPassword()
    {
        return $this->password;
    }
}
