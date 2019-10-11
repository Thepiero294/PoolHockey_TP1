<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Création de la table joueurs dans la BD grâce au migration
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_complet');
            $table->string('equipe');
            $table->integer('nb_points_prevus');
            $table->string('position');
            $table->unsignedBigInteger('id_participant_fk')->nullable();
            $table->foreign('id_participant_fk')->references('id')->on('users');
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
        Schema::dropIfExists('joueurs');
    }
}
