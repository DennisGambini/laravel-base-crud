<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title', 100)->change();
            $table->text('description')->change();
            $table->text('thumb')->change();
            $table->float('price', 7, 2)->change();
            $table->string('series', 100)->change();
            $table->date('sale_date')->change();
            $table->string('type', 50)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {

            $table->string('title', 100)->change();
            $table->text('description')->change();
            $table->string('thumb')->change();
            $table->float('price', 6, 2)->change();
            $table->string('series', 60)->change();
            $table->date('sale_date', 100)->change();
            $table->string('type', 30)->change();
        });
    }
}
