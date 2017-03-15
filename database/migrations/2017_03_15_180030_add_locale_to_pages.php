<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocaleToPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->integer('locale_id')->unsigned()
                  ->default(1)->after('text');

            //$table->foreign('locale_id')
              //->references('id')->on('locales');
              //->onDelete('cascade');
              //->after('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            
            $table->dropColumn(['locale_id']);
            //$table->dropForeign('locale_id');
        });
    }
}
