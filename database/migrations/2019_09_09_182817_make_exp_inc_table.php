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
            $table->float('other_income')->default(0);
            $table->float('electricity')->default(0);
            $table->float('water')->default(0);
            $table->float('gas')->default(0);
            $table->float('insurance')->default(0);
            $table->float('pmi')->default(0);
            $table->float('taxes')->default(0);
            $table->float('other')->default(0);
            $table->float('vacancy')->default(0);
            $table->float('capex')->default(0);
            $table->float('management')->default(0);
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
