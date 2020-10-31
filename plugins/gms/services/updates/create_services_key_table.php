<?php namespace Gms\Services\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateServicesKeyTable extends Migration
{
    public function up()
    {
        Schema::create('gms_services_key', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('service_id');
            $table->string('operation_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_services_key');
    }
}