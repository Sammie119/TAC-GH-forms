<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWDistrictPastorQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_district_pastor_questions as
            SELECT district_pastor_id,
            pastorques_name,
            pastorques_dob,
            date_part('year',age(pastorques_dob)) AS age,
            pastorques_year,
            pastorques_stay_length,
            pastorques_wife,
            pastorques_children,
            pastorques_child_age,
            pastorques_child_station,
            pastorques_comment1,
            pastorques_comment2,
            pastorques_comment3,
            pastorques_comment4,
            pastorques_comment5,
            pastorques_comment6,
            pastorques_comment7,
            pastorques_comment8,
            pastorques_comment9,
            pastorques_comment10,
            pastorques_comment11,
            pastorques_comment12,
            pastorques_comment13,
            pastorques_comment14,
            pastorques_name_dist,
            get_user_name(updated_by) AS user_name,
            updated_at
        FROM district_pastor_questions
        WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_district_pastor_questions');
    }
}
