<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBaidangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_baidang', function (Blueprint $table) {
            $table->Increments('baidang_id');
            $table->integer('category_id');
            $table->text('baidang_name');
            $table->text('baidang_desc');
            $table->string('baidang_image');
            $table->integer('baidang_status');
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
        Schema::dropIfExists('tbl_baidang');
    }
}
