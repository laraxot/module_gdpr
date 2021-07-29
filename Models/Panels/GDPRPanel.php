<?php

namespace Modules\GDPR\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

class GDPRPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\GDPR\Models\GDPR';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = array (
);

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @var array
     */
    public function with():array {
        return [];
    }

    public function search() :array {

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
    public function optionLabel(object $row):string {
        return $row->area_define_name;
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?array {
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
    public static function indexQuery($data, $query) {
        //return $query->where('auth_user_id', $request->user()->auth_user_id);
        return $query;
    }



    /**
     * Get the fields displayed by the resource.
     *
     * @return array
        'col_bs_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
        'value'=>'..',
     */
    public function fields(): array {
        return array (
  0 =>
  (object) array(
     'type' => 'Text',
     'name' => 'gdpr_status',
     'comment' => 'not in Doctrine',
  ),
  1 =>
  (object) array(
     'type' => 'Text',
     'name' => 'customer_agreement_status',
     'comment' => 'not in Doctrine',
  ),
  2 =>
  (object) array(
     'type' => 'Text',
     'name' => 'agreement_label',
     'comment' => 'not in Doctrine',
  ),
  3 =>
  (object) array(
     'type' => 'Text',
     'name' => 'agreement_content',
     'comment' => 'not in Doctrine',
  ),
  4 =>
  (object) array(
     'type' => 'Text',
     'name' => 'cookie_status',
     'comment' => 'not in Doctrine',
  ),
  5 =>
  (object) array(
     'type' => 'Text',
     'name' => 'cookie_block_position',
     'comment' => 'not in Doctrine',
  ),
  6 =>
  (object) array(
     'type' => 'Text',
     'name' => 'cookie_static_block_identifier',
     'comment' => 'not in Doctrine',
  ),
  7 =>
  (object) array(
     'type' => 'Text',
     'name' => 'data_update_request_template',
     'comment' => 'not in Doctrine',
  ),
  8 =>
  (object) array(
     'type' => 'Text',
     'name' => 'data_delete_request_template',
     'comment' => 'not in Doctrine',
  ),
  9 =>
  (object) array(
     'type' => 'Text',
     'name' => 'request_status_update_template',
     'comment' => 'not in Doctrine',
  ),
  10 =>
  (object) array(
     'type' => 'Text',
     'name' => 'request_status_delete_template',
     'comment' => 'not in Doctrine',
  ),
);
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
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request = null) {
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
