<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> cb28fd25c53e867274fbb6b6a907409213324a77
/**
 * @OA\Schema(
 *      schema="Transaction",
 *      required={"user_id","qrcode_id","amount","status"},
 *      @OA\Property(
 *          property="payment_method",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="paypal_payment_id",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="message",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="amount",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="number",
 *          format="number"
 *      ),
 *      @OA\Property(
 *          property="status",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="created_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="updated_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="deleted_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */class Transaction extends Model
{
     use SoftDeletes;    public $table = 'transactions';

    public $fillable = [
        'user_id',
        'qrcode_owner_id',
        'qrcode_id',
        'payment_method',
        'paypal_payment_id',
        'message',
        'amount',
        'status'
    ];

    protected $casts = [
        'payment_method' => 'string',
        'paypal_payment_id' => 'string',
        'message' => 'string',
        'amount' => 'float',
        'status' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'qrcode_owner_id' => 'nullable',
        'qrcode_id' => 'required',
        'payment_method' => 'nullable|string|max:255',
        'paypal_payment_id' => 'nullable|string|max:255',
        'message' => 'nullable|string',
        'amount' => 'required|numeric',
        'status' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->BelongsTo(Qrcode::class, 'qrcode_id')->select('product_name', 'product_url_image_path');
    }

<<<<<<< HEAD
    
=======
>>>>>>> cb28fd25c53e867274fbb6b6a907409213324a77
}
