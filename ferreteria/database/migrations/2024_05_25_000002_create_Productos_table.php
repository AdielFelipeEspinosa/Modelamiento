<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Productos';

    /**
     * Run the migrations.
     * @table Productos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idProductos')->primary();
            $table->string('Nombre', 1000);
            $table->string('Descripcion', 1000);
            $table->float('Precio');
            $table->bigInteger('Cantidad');
            $table->string('Link',500);
            $table->integer('Categorias_idCategorias')->unsigned();



            $table->foreign('Categorias_idCategorias', 'Categorias_idCategorias')
                ->references('idCategorias')->on('Categorias')
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
