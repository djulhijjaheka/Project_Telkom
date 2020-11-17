<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';

    protected $fillable = [
        'departement',
        'first_name',
        'last_name',
        'email',
        'gender',
        'ip_address'
    ];

    protected $hidden     = ['id','created_at','updated_at'];
}
