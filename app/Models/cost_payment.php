<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cost_payment
 * @package App\Models
 * @version October 26, 2022, 2:58 pm UTC
 *
 * @property string $payment_id
 * @property integer $invoice_id
 * @property string $payment_date
 * @property string $payment_value
 */
class cost_payment extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cost_payments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'payment_id',
        'invoice_id',
        'payment_date',
        'payment_value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'payment_id' => 'string',
        'invoice_id' => 'integer',
        'payment_date' => 'string',
        'payment_value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
