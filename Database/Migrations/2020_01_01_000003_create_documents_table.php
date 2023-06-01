<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- models -----

// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateThemesTable.
 */
class CreateDocumentsTable extends XotBaseMigration
{
    // use XotBaseMigrationTrait;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');

                $table->string('lang')->nullable();
                $table->string('subject')->nullable();
                $table->text('body_html')->nullable();
                $table->nullableMorphs('post');

                $table->string('logo_src')->nullable();
                $table->integer('logo_width')->nullable();
                $table->integer('logo_height')->nullable();
                $table->json('view_params');

                $table->timestamps();

                $table->string('updated_by')->nullable();
                $table->string('created_by')->nullable();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if ($this->hasColumn('body_html')) {
                    $table->longText('body_html')->nullable()->change();
                }

                if ($this->hasColumn('view_params')) {
                    $table->json('view_params')->nullable()->change();
                }
            }
        ); // end update
    }

    // end function up
}
