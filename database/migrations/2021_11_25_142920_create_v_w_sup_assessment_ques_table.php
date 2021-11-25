<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWSupAssessmentQuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_sup_assessment_ques as
            SELECT sup_ass_id,
            sup_ass_district AS district,
            sup_ass_area AS area,
            sup_ass_local AS local,
            sup_ass_name AS name,
            sup_ass_comment1,
            sup_ass_comment2,
            sup_ass_comment3,
            sup_ass_comment4,
            sup_ass_comment5,
            sup_ass_comment6,
            sup_ass_comment7,
            sup_ass_comment8,
            sup_ass_comment9,
            sup_ass_comment10,
            sup_ass_comment11,
            sup_ass_comment12,
            sup_ass_comment13,    
            get_user_name(updated_by) AS user_name,
            updated_at
        FROM sup_assessment_ques
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
        DB::unprepared('DROP VIEW IF EXISTS v_w_sup_assessment_ques');
    }
}
