<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JabatanModel extends Model
{
    protected $table = 'tb_jabatan';
    public $timestamps = true;

    /**
     * @var string[]
     */
    protected $fillable = [
        'jabatan',
        'type',
        'disabled',
        'company_id',
        'deleted_at',
        'created_at',
        'updated_at',
        'created_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [

    ];
}
