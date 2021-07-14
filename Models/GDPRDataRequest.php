<?php

namespace Modules\GDPR\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\GDPR\Contracts\GDPRDataRequest as GDPRDataRequestContract;

/**
 * Modules\GDPR\Models\GDPRDataRequest
 *
 * @method static \Illuminate\Database\Eloquent\Builder|GDPRDataRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GDPRDataRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GDPRDataRequest query()
 * @mixin \Eloquent
 */
class GDPRDataRequest extends Model implements GDPRDataRequestContract
{
    protected $table = 'gdpr_data_request';
    protected $fillable = [
        'customer_id',
        'email',
        'request_status',
        'request_type',
        'message'  
    ];

}
