<?php namespace Gms\Services\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('gms_services_services', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('is_active');
            $table->text('text');
            $table->text('price_block');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_services_services');
    }
}
