<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('quartier')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('service')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('status')->nullable();


            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('agent_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('rdvs');
    }
}
