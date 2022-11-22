<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prj_Pending extends Model
{
    use HasFactory;
    protected $table = 'projects_pending';
    protected $primarykey = 'id_pending';
    protected $fillable = [
        'project_id','deskripsi_pending','status_pending','updated_at','created_at','deleted_at'
    ];
}