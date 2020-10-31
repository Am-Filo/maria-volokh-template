<?php namespace Gms\Main\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSocialoptionsTable extends Migration
{
    public function up()
    {
        Schema::create('gms_main_socialoptions', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('icon');
            $table->string('link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_main_socialoptions');
    }
}
