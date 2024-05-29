<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public $tableName = 'Departamentos';

    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idDepartamentos')->primary();
            $table->string('Nombre', 45);
            $table->integer('Municipios_idMunicipios')->unsigned();

            $table->foreign('Municipios_idMunicipios','Municipios_idMunicipios')
            ->references('idMunicipios')->on('Municipios')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }
};
