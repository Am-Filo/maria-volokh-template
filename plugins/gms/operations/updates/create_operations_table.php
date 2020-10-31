<?php namespace Gms\Operations\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOperationsTable extends Migration
{
    public function up()
    {
        Schema::create('gms_operations_operations', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('is_active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_operations_operations');
    }
}
