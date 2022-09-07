<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers;

// ---- bases ----
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class GdprServiceProvider.
 */
class GdprServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'gdpr';
}
