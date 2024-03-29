<?php

declare(strict_types=1);

namespace Modules\Gdpr\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GdprController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index() {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::index';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create() {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::create';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Renderable
     */
    public function store(Request $request) {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::store';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Show the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function show($id) {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::show';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function edit($id) {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::edit';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function update(Request $request, $id) {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::update';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function destroy($id) {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::destroy';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
