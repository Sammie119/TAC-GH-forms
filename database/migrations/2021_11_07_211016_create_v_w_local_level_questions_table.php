<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWLocalLevelQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_local_level_questions as
            SELECT local_level_id,
            llm_district AS district,
            llm_area AS area,
            llm_local AS local,
            llm_status AS status,
            llm_question1,
            llm_comment1,
            llm_question2,
            llm_comment2,
            llm_question3,
            llm_comment3,
            llm_question4,
            llm_comment4,
            llm_question5,
            llm_comment5,
            llm_question6,
            llm_comment6,
            llm_question7,
            llm_comment7,
            llm_question8,
            llm_comment8,
            llm_question9,
            llm_comment9,
            llm_question10,
            llm_comment10,
            llm_question11,
            llm_comment11,
            llm_question12,
            llm_comment12,
            llm_question13,
            llm_comment13,
            llm_question14,
            llm_comment14,
            llm_question15,
            llm_comment15,
            llm_question16,
            llm_comment16,
            llm_question17,
            llm_comment17,
            llm_question18,
            llm_comment18,
            llm_question19,
            llm_comment19,
            llm_question20,
            llm_comment20,
            llm_question21,
            llm_comment21,
            llm_question22,
            llm_comment22,
            get_user_name(updated_by) AS user_name,
            updated_at
        FROM local_level_questions
        WHERE deleted_at IS NULL;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_local_level_questions');
    }
}
