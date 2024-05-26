<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Users';

    /**
     * Run the migrations.
     * @table Users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idUsers')->primary();
            $table->string('Nombres', 45);
            $table->string('Apellidos', 45);
            $table->string('Correo', 45);
            $table->bigInteger('Celular');
            $table->string('Direccion', 45);
            $table->string('password', 200);
            $table->dateTime('Fecha_Registro');
            $table->integer('Roles_idRoles')->unsigned()->default(2);



            $table->foreign('Roles_idRoles','Roles_idRoles')
                ->references('idRoles')->on('Roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
