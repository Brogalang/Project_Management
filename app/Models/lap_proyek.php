<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lap_proyek extends Model
{
    use HasFactory;
    protected $table = 'projects_status';
    protected $primarykey = 'id_progress';
    protected $fillable = [
        'project_id','nama_progress','status_progress','catatan_progress','tanggal_progress','updated_at','created_at','deleted_at'
    ];
}
