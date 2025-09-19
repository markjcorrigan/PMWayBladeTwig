<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionTopicTable extends Migration
{
    public function up()
    {
        Schema::create('subscription_topic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('subscription_id')->constrained()->cascadeOnDelete();
            $table->foreignId('topic_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscription_topic');
    }
}
