<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDangkyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_dangky', function (Blueprint $table) {
          $table->Increments('dangky_id');
          $table->integer('dangky_tenkhoahoc');
            $table->integer('dangky_name');
            $table->text('dangky_email');
            $table->text('dangky_phone');
            $table->string('dangky_fb');
            $table->integer('dangky_note');
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
        Schema::dropIfExists('tbl_dangky');
    }
}
