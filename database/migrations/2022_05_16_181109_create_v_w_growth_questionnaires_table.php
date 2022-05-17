<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVWGrowthQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_growth_questionnaires as
                SELECT growth_id,
                    growthque_district AS district,
                    growthque_area AS area,
                    growthque_local AS local,
                    growthque_status AS status,
                    growthque_question1,
                    growthque_comment1,
                    growthque_question2,
                    growthque_comment2,
                    growthque_question3,
                    growthque_comment3,
                    growthque_question4,
                    growthque_comment4,
                    growthque_question5,
                    growthque_comment5,
                    growthque_question6,
                    growthque_comment6,
                    growthque_question7,
                    growthque_comment7,
                    growthque_question8,
                    growthque_comment8,
                    growthque_question9,
                    growthque_comment9,
                    growthque_question10,
                    growthque_comment10,
                    growthque_question11,
                    growthque_comment11,
                    growthque_question12,
                    growthque_comment12,
                    growthque_question13,
                    growthque_comment13,
                    growthque_question14,
                    growthque_comment14,
                    growthque_question15,
                    growthque_comment15,
                    growthque_question16,
                    growthque_comment16,
                    growthque_question17,
                    growthque_comment17,
                    growthque_comment18,   
                    get_user_name(updated_by) AS user_name,
                    updated_at
                FROM growth_questionnaires
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
        DB::unprepared('DROP VIEW IF EXISTS v_w_growth_questionnaires');
    }
}
