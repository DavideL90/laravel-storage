<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColsGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods', function (Blueprint $table) {
            $table->string('marca', 50);
            $table->float('prezzo_vendita', 6, 2);
            $table->renameColumn('prezzo', 'prezzo_acquisto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goods', function (Blueprint $table) {
           $table->dropColumn('marca');
           $table->dropColumn('prezzo_vendita');
           $table->renameColumn('prezzo_acquisto', 'prezzo');

        });
    }
}
