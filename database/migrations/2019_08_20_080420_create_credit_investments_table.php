<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_investments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('amount')->nullable();

            $table->unsignedInteger('credit_id')->nullable();
            $table->foreign('credit_id')
                ->references('id')
                ->on('credits')
                ->name('credit_credit_investment');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->name('user_credit_investment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_investments');
    }
}
