<?php

declare(strict_types=1);

namespace Modules\GDPR\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

class GDPRPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\GDPR\Models\GDPR';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
    ];

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @var array
     */
    public function with(): array {
        return [];
    }

    public function search(): array {
        return [];
    }

    /**
     * on select the option id.
     */
    public function optionId(object $row) {
        return $row->area_id;
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return $row->area_define_name;
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?\Illuminate\Contracts\Support\Renderable {
        return [];
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param Request                               $request
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery(array $data,\Illuminate\Database\Eloquent\Builder $query):\Illuminate\Database\Eloquent\Builder {
        //return $query->where('auth_user_id', $request->user()->auth_user_id);
        return $query;
    }

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array {
        return [
            0 => (object) [
                'type' => 'Text',
                'name' => 'gdpr_status',
                'comment' => 'not in Doctrine',
            ],
            1 => (object) [
                'type' => 'Text',
                'name' => 'customer_agreement_status',
                'comment' => 'not in Doctrine',
            ],
            2 => (object) [
                'type' => 'Text',
                'name' => 'agreement_label',
                'comment' => 'not in Doctrine',
            ],
            3 => (object) [
                'type' => 'Text',
                'name' => 'agreement_content',
                'comment' => 'not in Doctrine',
            ],
            4 => (object) [
                'type' => 'Text',
                'name' => 'cookie_status',
                'comment' => 'not in Doctrine',
            ],
            5 => (object) [
                'type' => 'Text',
                'name' => 'cookie_block_position',
                'comment' => 'not in Doctrine',
            ],
            6 => (object) [
                'type' => 'Text',
                'name' => 'cookie_static_block_identifier',
                'comment' => 'not in Doctrine',
            ],
            7 => (object) [
                'type' => 'Text',
                'name' => 'data_update_request_template',
                'comment' => 'not in Doctrine',
            ],
            8 => (object) [
                'type' => 'Text',
                'name' => 'data_delete_request_template',
                'comment' => 'not in Doctrine',
            ],
            9 => (object) [
                'type' => 'Text',
                'name' => 'request_status_update_template',
                'comment' => 'not in Doctrine',
            ],
            10 => (object) [
                'type' => 'Text',
                'name' => 'request_status_delete_template',
                'comment' => 'not in Doctrine',
            ],
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request) {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(Request $request = null): array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request) {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [];
    }
}
