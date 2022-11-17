<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanModel extends Model
{
    use HasFactory;
    protected $table = 'tb_jabatan';
    protected $primarykey = 'id';
    protected $fillable = [
        'jabatan','type','disabled','company_id','deleted_at','created_at','updated_at','created_at'
    ];
}
