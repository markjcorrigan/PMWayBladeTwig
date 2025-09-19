<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostRevisionsTable extends Migration
{
    public function up()
    {
        Schema::create('post_revisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id');
            $table->string('title');
            $table->text('post_text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_revisions');
    }
}
