<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePmaTables extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('opleidingen');
        Schema::create('opleidingen', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->string('name', 255)->comment('Naam van de opleiding');
            $table->text('description')->comment('De omschrijving van de opleiding');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::dropIfExists('klassen');
        Schema::create('klassen', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->string('name', 255)->comment('Naam van de klas');
            $table->text('description')->comment('De omschrijving van de klas');
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::dropIfExists('cursussen');
        Schema::create('cursussen', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->text('naam_cursus')->nullable()->comment('Naam van de cursus');
            $table->date('start')->comment('Start datum van cursus');
            $table->date('end')->comment('Eind datum van cursus');
            // $table->string('leerjaar')->index('leerjaar')->comment('1e of 2e klas');
            // $table->boolean('is_gereserveerd')->default(false)->comment('Als de les is geplanned');
            $table->boolean('is_afgerond')->default(false)->comment('Als deze les is afgerond');
            $table->text('commentaar')->nullable()->comment('Eventuele commentaar van de leraar');
            $table->timestamps();
            $table->softDeletes();           
        });        

        Schema::dropIfExists('opdrachten_jaar1_sd_web');
        Schema::create('opdrachten_jaar1_sd_web', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->string('hoofdstuk', 10)->comment('Hoofdstuk van de opdracht');
            $table->string('name', 255)->comment('Naam van de opdrachten');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::dropIfExists('opdrachten_jaar1_sd_app');
        Schema::create('opdrachten_jaar1_sd_app', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->string('hoofdstuk', 10)->comment('Hoofdstuk van de opdracht');
            $table->string('name', 255)->comment('Naam van de opdrachten');
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::dropIfExists('opdrachten_jaar2_sd_gd');
        Schema::create('opdrachten_jaar2_sd_gd', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->string('hoofdstuk', 10)->comment('Hoofdstuk van de opdracht');
            $table->string('name', 255)->comment('Naam van de opdrachten');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::dropIfExists('opdrachten_jaar2_sd_sv');
        Schema::create('opdrachten_jaar2_sd_sv', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->string('hoofdstuk', 10)->comment('Hoofdstuk van de opdracht');
            $table->string('name', 255)->comment('Naam van de opdrachten');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::dropIfExists('docenten');
        Schema::create('docenten', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->string('name', 255)->comment('Naam van de docent');
            // $table->string('code', 10)->comment('Code van de docent');
            $table->string('email', 255)->comment('Email van de docent');
            $table->string('wachtwoord', 60)->comment('Wachtwoord van docent');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::dropIfExists('leerlingen');
        Schema::create('leerlingen', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->string('name', 255)->comment('Naam van de leerling');
            // $table->text('description')->comment('De omschrijving van het vak');
            $table->string('wachtwoord', 60)->comment('Wachtwoord van de leerlingen');
            $table->string('email', 255)->comment('Email van de leerling');
            // $table->unsignedBigInteger('leerjaar')->comment('Leerjaar van de leerlingen');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::dropIfExists('cursus_users');
        Schema::create('cursus_users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('De primary key van deze tabel');
            $table->unsignedBigInteger('cursus_id')->index('cursus_id')->comment('De aangemaakte cursus');
            // $table->unsignedBigInteger('docent_id')->index('docent_id')->comment('ID van de docent');
            // $table->unsignedBigInteger('leerlingen_id')->index('leerlingen_id')->comment('ID van de leerlingen');
            $table->timestamps();

            // $table->foreign('opdrachten_id1')->references('id')->on('opdrachten_jaar1');
            // $table->foreign('opdrachten_id2')->references('id')->on('opdrachten_jaar2');
            $table->foreign('cursus_id')->references('id')->on('cursussen');
            // $table->foreign('cursus_id2')->references('id')->on('cursus_jaar2');
            // $table->foreign('docent_id')->references('id')->on('docenten');
            // $table->foreign('leerlingen_id')->references('id')->on('leerlingen');
            // $table->foreign('opleidingen_id')->references('id')->on('opleidingen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opleidingen');
        Schema::dropIfExists('cursussen');
        Schema::dropIfExists('opdrachten_jaar1_sd');
        Schema::dropIfExists('opdrachten_jaar2_sd');
        Schema::dropIfExists('opdrachten_jaar1_gd');
        Schema::dropIfExists('opdrachten_jaar2_gd');
        Schema::dropIfExists('docenten');
        Schema::dropIfExists('leerlingen');
        Schema::dropIfExists('cursus_users');
        // Schema::dropIfExists('user');
    }
}
