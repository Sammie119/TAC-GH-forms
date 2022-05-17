<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForm1920ToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedTinyInteger('form19')->default(0);
            $table->unsignedTinyInteger('form20')->default(0);
            $table->unsignedTinyInteger('form21')->default(0);
            $table->unsignedTinyInteger('form22')->default(0);
        });

        DB::table('users')->update([
            'form1' => 1,
            'form2' => 1,
            'form3' => 1,
            'form4' => 1,
            'form5' => 1,
            'form6' => 1,
            'form7' => 1,
            'form8' => 1,
            'form9' => 1,
            'form10' => 1,
            'form11' => 1,
            'form12' => 1,
            'form13' => 1,
            'form14' => 1,
            'form15' => 1,
            'form16' => 1,
            'form17' => 1,
            'form18' => 1,
            'form19' => 1,
            'form20' => 1,
            'form21' => 1,
            'form22' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('form19');
            $table->dropColumn('form20');
            $table->dropColumn('form21');
            $table->dropColumn('form22');
        });
    }
}
