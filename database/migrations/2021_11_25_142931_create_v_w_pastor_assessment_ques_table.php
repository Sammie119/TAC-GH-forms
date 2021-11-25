<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWPastorAssessmentQuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_pastor_assessment_ques as
            SELECT pastor_ass_id,
                past_ass_district AS district,
                past_ass_area AS area,
                past_ass_local AS local,
                past_ass_name AS name,
                past_ass_comment1,
                past_ass_comment2,
                past_ass_comment3,
                past_ass_comment4,
                past_ass_comment5,
                past_ass_comment6,
                past_ass_comment7,
                past_ass_comment8,
                past_ass_comment9,
                past_ass_comment10,
                past_ass_comment11,
                past_ass_comment12,
                past_ass_comment13,     
                get_user_name(updated_by) AS user_name,
                updated_at
            FROM pastor_assessment_ques
            WHERE deleted_at IS NULL;
            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_pastor_assessment_ques');        
    }
}
