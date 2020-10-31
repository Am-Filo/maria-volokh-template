<?php namespace Gms\Services\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('gms_services_teams', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('text');
            $table->string('is_active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_services_teams');
    }
}
