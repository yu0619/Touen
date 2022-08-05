<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituions', function (Blueprint $table) {
            $table->id();
            $table->boolean('user_id');
            $table->string('administrator_name')->comment('管理者名');
            $table->string('institution_name')->comment('施設名');
            $table->string('class_name')->comment('各クラス名');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituions');
    }
}
