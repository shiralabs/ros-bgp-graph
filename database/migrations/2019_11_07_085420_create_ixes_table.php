<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ixes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('host');
            $table->unsignedInteger('port')->nullable()->default(80);
            $table->string('iface');
            $table->unsignedTinyInteger('display');
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
        Schema::dropIfExists('ixes');
    }
}
