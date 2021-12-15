<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVWPresidingAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_presiding_assessments as
                SELECT presiding_id,
                    pres_ass_district AS district,
                    pres_ass_area AS area,
                    pres_ass_local AS local,
                    pres_ass_name AS name,
                    pres_ass_comment1,
                    pres_ass_comment2,
                    pres_ass_comment3,
                    pres_ass_comment4,
                    pres_ass_comment5,
                    pres_ass_comment6,
                    pres_ass_comment7,
                    pres_ass_comment8,
                    pres_ass_comment9,
                    pres_ass_comment10,
                    pres_ass_comment11,
                    pres_ass_comment12,    
                    get_user_name(updated_by) AS user_name,
                    updated_at
                FROM presiding_assessments
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
        DB::unprepared('DROP VIEW IF EXISTS v_w_presiding_assessments');
    }
}
