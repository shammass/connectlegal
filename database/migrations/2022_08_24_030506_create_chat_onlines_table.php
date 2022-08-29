<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_onlines', function (Blueprint $table) {
            $table->id();
            $table->longText('comment')->nullable();
            
            $table->unsignedBigInteger('user_id')->nullable();
			$table->foreign('user_id')
				->references('id')->on('users')
                ->onDelete('cascade');

            $table->unsignedBigInteger('lawyer_id')->nullable();
			$table->foreign('lawyer_id')
				->references('id')->on('lawyers')
                ->onDelete('cascade');
            
            $table->boolean('status')->default(0);
            $table->boolean('complete')->default(0);
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
        Schema::dropIfExists('chat_onlines');
    }
};
