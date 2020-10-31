<?php namespace Gms\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBlogKeyTable extends Migration
{
    public function up()
    {
        Schema::create('gms_blog_key', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('article_id');
            $table->string('video_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gms_blog_key');
    }
}
