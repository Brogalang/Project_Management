<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DivisiModel
 * @package App\Models
 *
 * @property int $id
 * @property string $nama_div_ext
 * @property string $type
 * @property int $disabled
 * @property string $div_nomor_surat
 * @property int $company_id
 * @property Carbon|null $deleted_at
 */
class DivisiModel extends Model
{
    protected $table = 'tbldivmaster';
    public $timestamps = true;

    /**
     * @var string[]
     */
    protected $fillable = [
        'nama_div_ext',
        'type',
        'disabled',
        'div_nomor_surat',
        'company_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [

    ];

}
