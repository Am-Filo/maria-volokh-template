<?php namespace Gms\Order\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('gms_order_feedback', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('ip');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_order_feedback');
    }
}
