<?php namespace Gms\Main\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOptionLinkKeyTable extends Migration
{
    public function up()
    {
        Schema::create('gms_option_link_key', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('option_id');
            $table->string('socialoption_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_option_link_key');
    }
}
