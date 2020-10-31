<?php namespace Gms\Main\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('gms_main_options', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('text_lower');
            $table->text('text_about');
            $table->string('phone_h');
            $table->string('mail_h');
            $table->string('domain_h');
            $table->string('phone_b');
            $table->string('mail_b');
            $table->string('domain_b');
            $table->string('contact_b');
            $table->string('year_b');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_main_options');
    }
}
