<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class revenue_payment
 * @package App\Models
 * @version October 26, 2022, 3:02 pm UTC
 *
 * @property string $payment_id
 * @property string $payment_date
 * @property string $payment_value
 * @property integer $invoice_id
 */
class revenue_payment extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'revenue_payments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'payment_id',
        'payment_date',
        'payment_value',
        'invoice_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'payment_id' => 'string',
        'payment_date' => 'string',
        'payment_value' => 'string',
        'invoice_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
