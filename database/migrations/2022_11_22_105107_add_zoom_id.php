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
        Schema::table('schduled_meetings', function (Blueprint $table) {
            $table->unsignedBigInteger('zoom_id')->nullable();
            $table->foreign('zoom_id')
                ->references('id')->on('zooms')   
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schduled_meetings', function (Blueprint $table) {
            $table->dropForeign('zoom_id');
            $table->dropColumn('zoom_id');
        });
    }
};
