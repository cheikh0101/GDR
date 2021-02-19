<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semestre')->nullable();
            $table->string('matiere');
            $table->string('typeEvaluation');
            $table->string('professeur');
            $table->text('commentaire');
            $table->integer('user_id')->unsigned();
            /*
            Dans la table on déclare une clé étrangère (foreign) nommée user_id qui référence (references) la ligne id dans la table (on) etudiant. 
            En cas de suppression (onDelete) ou de modification (onUpdate) on a une restriction (restrict).
        */
            $table->foreign('user_id')
                ->references('id')
                ->on('etudiants')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('reclamations');
    }
}
