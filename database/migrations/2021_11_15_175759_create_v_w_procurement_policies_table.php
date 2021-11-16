<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWProcurementPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_procurement_policies as
            SELECT procurement_id,
                fin_eva_b_area AS area,
                fin_eva_b_district AS district,
                fin_eva_b_local AS local,
                fin_eva_b_moniter,
                fin_eva_b_comment1a,
                fin_eva_b_question1b,
                fin_eva_b_comment1b,
                fin_eva_b_question1c,
                fin_eva_b_comment1c,
                fin_eva_b_question1d,
                fin_eva_b_comment1d,
                fin_eva_b_comment2a,
                fin_eva_b_question2b,
                fin_eva_b_comment2b,
                fin_eva_b_question2c,
                fin_eva_b_comment2c,
                fin_eva_b_comment2d,
                fin_eva_b_question3a,
                fin_eva_b_comment3a,
                fin_eva_b_comment3b,
                fin_eva_b_question3c,
                fin_eva_b_comment3c,
                fin_eva_b_comment3d,
                fin_eva_b_question4a,
                fin_eva_b_comment4a,
                fin_eva_b_comment4b,
                fin_eva_b_question4c,
                fin_eva_b_comment4c,
                fin_eva_b_question5a,
                fin_eva_b_comment5a,
                fin_eva_b_question5b,
                fin_eva_b_comment5b,
                fin_eva_b_question5c,
                fin_eva_b_comment5c,
                fin_eva_b_comment5d,
                fin_eva_b_question6a,
                fin_eva_b_comment6a,
                fin_eva_b_question6b,
                fin_eva_b_comment6b,
                fin_eva_b_question6c,
                fin_eva_b_comment6c,
                fin_eva_b_question7a,
                fin_eva_b_comment7a,
                fin_eva_b_comment7b,
                fin_eva_b_comment7c,
                fin_eva_b_comment7d,
                fin_eva_b_question8a,
                fin_eva_b_comment8a,
                fin_eva_b_question8b,
                fin_eva_b_comment8b,
                get_user_name(updated_by) AS user_name,
                updated_at
            FROM procurement_policies
            WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_procurement_policies');
    }
}
