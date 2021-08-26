<?php

declare(strict_types=1);

namespace Modules\GDPR\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\GDPR\Contracts\GDPR as GDPRContract;

/**
 * Modules\GDPR\Models\GDPR.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|GDPR newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GDPR newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GDPR query()
 * @mixin \Eloquent
 */
class GDPR extends Model implements GDPRContract {
    protected $table = 'gdpr';
    protected $fillable = [
        'gdpr_status',
        'customer_agreement_status',
        'agreement_label',
        'agreement_content',
        'cookie_status',
        'cookie_block_position',
        'cookie_static_block_identifier',
        'data_update_request_template',
        'data_delete_request_template',
        'request_status_update_template',
        'request_status_delete_template',
    ];
}
