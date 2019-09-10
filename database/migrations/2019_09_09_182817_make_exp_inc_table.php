<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeExpIncTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exp_inc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('report_id');
            $table->float('rental_income');
            $table->float('other_income');
            $table->float('electricity');
            $table->float('water');
            $table->float('gas');
            $table->float('insurance');
            $table->float('taxes');
            $table->float('other');
            $table->float('vacancy');
            $table->float('capex');
            $table->float('management');
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
        Schema::dropIfExists('exp_inc');
    }
}
