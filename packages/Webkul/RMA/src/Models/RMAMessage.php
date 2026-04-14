<?php

namespace Webkul\RMA\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\RMA\Contracts\RMAMessage as RMAMessageContract;

class RMAMessage extends Model implements RMAMessageContract
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rma_messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // SECURITY-PATCH: #6 — is_admin removed from fillable; set explicitly in controllers to prevent customer forgery
    protected $fillable = [
        'message',
        'rma_id',
        'attachment_path',
        'attachment',
    ];

    /**
     * Get the RMA that owns the message.
     */
    public function rma()
    {
        return $this->belongsTo(RMA::class);
    }
}
