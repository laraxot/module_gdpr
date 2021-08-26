<?php

declare(strict_types=1);

namespace Modules\GDPR\Models\Panels;

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class HomePanel.
 */
class HomePanel extends XotBasePanel {
    public static string $model = 'Modules\Xot\Models\Home';

    /*
    public function actions(): array {
        return [
            new Actions\FullcalendarAction(),
            new Actions\TestAction(),
        ];
    }
    */
}
