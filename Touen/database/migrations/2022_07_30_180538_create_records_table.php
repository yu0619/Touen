<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->time('touen_time')->comment('登園時刻');
            $table->time('kouen_time')->comment('降園時刻');
            $table->time('sutandrd_touen_time')->comment('登園基本時刻');
            $table->time('sutandrd_kouen_time')->comment('降園基本時刻');
            $table->tinyInteger('temperature');
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
        Schema::dropIfExists('records');
    }
}
