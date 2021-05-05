<?php
/**
 * da bagisto.
 */

namespace Modules\GDPR\Providers;

class RepositoryServiceProvider {
    protected $models = [
        \Modules\GDPR\Models\GDPR::class,
        \Modules\GDPR\Models\GDPRDataRequest::class,
    ];
}