<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('lastgame')->nullable();
            $table->string('servers')->nullable();
            $table->date('birthday');
            $table->string('adress')->nullable();
            $table->string('pseudo')->nullable();
            $table->string('image');
            $table->string('Codebomb');
            $table->integer('parent')->nullable();
            $table->integer('boost_register');
            $table->integer('boost_parent');
            $table->string('identity')->nullable();
            $table->string('rib')->nullable();
            $table->string('rib_str')->nullable();
            $table->integer('status');
            $table->double('solde');
            $table->integer('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
