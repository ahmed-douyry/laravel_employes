<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            
            $table->primary('key');
            $table->string('key');
            $table->string('code_theme');
            $table->integer('Mle');
            $table->string('Nom&Prenom');
            $table->string('JCM');
            $table->string('Metier');
            $table->string('Service');
            $table->string('Entite');
            $table->string('manager');
            $table->foreign('manager')->references('matricule')->on('managers');
            $table->integer('duree');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('presence');
            $table->string('programe');
            $table->string('groupe');
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
        Schema::dropIfExists('employes');
    }
};
