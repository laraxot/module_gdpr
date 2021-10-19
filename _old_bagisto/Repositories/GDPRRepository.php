<?php

declare(strict_types=1);

namespace Modules\GDPR\Repositories;

use Illuminate\Container\Container;
use Modules\Core\Eloquent\Repository;

class GDPRRepository extends Repository {
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model() {
        return 'Modules\GDPR\Contracts\GDPR';
    }

    public function __construct(
        Container $container
    ) {
        parent::__construct($container);
    }
}