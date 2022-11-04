<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SubDivisiModel
 * @package App\Models
 *
 *
 * @property int $id
 * @property string $subdivisi
 * @property int $iddivisi
 * @property string $type
 * @property int $disabled
 * @property int $company_id
 * @property Carbon|null $deleted_at
 */
class SubDivisiModel extends Model
{
    use SoftDeletes;

    protected $table = 'tb_subdivisi';
    public $timestamps = true;

    protected $dates = [
        'deleted_at',
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'subdivisi',
        'iddivisi',
        'type',
        'disabled',
        'company_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [

    ];

    public function divisi(): BelongsTo
    {
        return $this->belongsTo(DivisiModel::class, 'iddivisi', 'id');
    }
}
