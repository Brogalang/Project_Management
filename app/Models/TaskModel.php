<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    use HasFactory;
    protected $table = 'tasklist';
    protected $primarykey = 'id_task';
    protected $fillable = [
        'project_id','urutan_task','nama_task','tgldari_task','tglsmp_task','progress','created_at','updated_at','deleted_at'
    ];
}
