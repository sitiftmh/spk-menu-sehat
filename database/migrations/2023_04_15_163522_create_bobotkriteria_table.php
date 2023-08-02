<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateBobotkriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobotkriteria', function (Blueprint $table) {
            $table->id();
            $table->integer('bobot_kriteria');
            $table->timestamps();
        });

        DB::table('bobotkriteria')->insert([
            ['bobot_kriteria'=>'20'],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bobotkriteria');
    }
}
