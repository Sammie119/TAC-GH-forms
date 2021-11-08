<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWLocalEvangelismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_local_evangelisms as
            SELECT local_evang_id,
            evange_district AS district,
            evange_area AS area,
            evange_local AS local,
            evange_status AS status,
            evange_question1,
            evange_comment1,
            evange_question2,
            evange_comment2,
            evange_question3,
            evange_comment3,
            evange_question4,
            evange_comment4,
            evange_question5,
            evange_comment5,
            evange_question6,
            evange_comment6,
            evange_question7,
            evange_comment7,
            evange_question8,
            evange_comment8,
            evange_question9,
            evange_comment9,
            evange_question10,
            evange_comment10,
            evange_question11,
            evange_comment11,
            evange_question12,
            evange_comment12,
            evange_question13,
            evange_comment13,
            evange_question14,
            evange_comment14,
            evange_question15,
            evange_comment15,
            evange_question16,
            evange_comment16,
            evange_question17,
            evange_comment17,
            evange_question18,
            evange_comment18,
            evange_name,
            get_user_name(updated_by) AS user_name,
            updated_at
        FROM local_evangelisms
        WHERE deleted_at IS NULL;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_local_evangelisms');
    }
}
