<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultancies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('telephone', 30);
            $table->string('company');
            $table->string('description');
            $table->tinyInteger('interest')->comment('1 - Soluções em Business Intelligence, 2 - Soluções em Base de Dados, 3 - Aplicativos, 4 - Sites');
            $table->string('dashboards_amt', 10)->nullable();
            $table->string('data_sources_amt', 10)->nullable();
            $table->boolean('data_engineering_help')->nullable();
            $table->enum('dashboard_type', ['Ferramentas de tomada de decisões', 'Estilo alerta', 'Insights automáticos', 'Tabelas de texto'])->nullable();;
            $table->tinyInteger('app_service_type')->nullable();
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
        Schema::dropIfExists('consultancies');
    }
}
