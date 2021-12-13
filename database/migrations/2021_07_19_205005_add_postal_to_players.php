<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPostalToPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->string('postal_adress')->nullable();
            $table->text('compl_adress')->nullable();
            $table->string('postal_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropColumn('postal_adress');
            $table->dropColumn('compl_adress');
            $table->dropColumn('postal_code');
        });
    }
}
