<?php namespace Gms\Main\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSlidersTable extends Migration
{
    public function up()
    {
        Schema::create('gms_main_sliders', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('is_active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_main_sliders');
    }
}
