<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWFinancialPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_financial_policies as
            SELECT financial_id,
                fin_eva_a_area AS area,
                fin_eva_a_district AS district,
                fin_eva_a_local AS local,
                fin_eva_a_moniter,
                fin_eva_a_question1a,
                fin_eva_a_comment1a,
                fin_eva_a_question1b,
                fin_eva_a_comment1b,
                fin_eva_a_question1c,
                fin_eva_a_comment1c,
                fin_eva_a_question1d,
                fin_eva_a_comment1d,
                fin_eva_a_question1e,
                fin_eva_a_comment1e,
                fin_eva_a_question1f,
                fin_eva_a_comment1f,
                fin_eva_a_question1g,
                fin_eva_a_comment1g,
                fin_eva_a_question2a,
                fin_eva_a_comment2a,
                fin_eva_a_question2b,
                fin_eva_a_comment2b,
                fin_eva_a_question2c,
                fin_eva_a_comment2c,
                fin_eva_a_question3a,
                fin_eva_a_comment3a,
                fin_eva_a_question3b,
                fin_eva_a_comment3b,
                fin_eva_a_question3c,
                fin_eva_a_comment3c,
                fin_eva_a_question3d,
                fin_eva_a_comment3d,
                fin_eva_a_question3e,
                fin_eva_a_comment3e,
                fin_eva_a_question3f,
                fin_eva_a_comment3f,
                fin_eva_a_question3g,
                fin_eva_a_comment3g,
                fin_eva_a_question3h,
                fin_eva_a_comment3h,
                fin_eva_a_question3i,
                fin_eva_a_comment3i,
                fin_eva_a_question4a,
                fin_eva_a_comment4a,
                fin_eva_a_comment4b,
                fin_eva_a_comment4c1,
                fin_eva_a_comment4c2,
                fin_eva_a_comment4c3,
                fin_eva_a_comment4d,
                fin_eva_a_comment4e,
                fin_eva_a_comment4f,
                fin_eva_a_comment5a,
                fin_eva_a_comment5b1,
                fin_eva_a_comment5b2,
                fin_eva_a_comment5b3,
                fin_eva_a_comment5b4,
                fin_eva_a_comment5c,
                fin_eva_a_question6a,
                fin_eva_a_comment6a,
                fin_eva_a_comment6b,
                fin_eva_a_question6c1,
                fin_eva_a_comment6c1,
                fin_eva_a_question6c2,
                fin_eva_a_comment6c2,
                fin_eva_a_comment6c3,
                fin_eva_a_question6d,
                fin_eva_a_comment6d,
                fin_eva_a_question6e,
                fin_eva_a_comment6e,
                fin_eva_a_question7a1,
                fin_eva_a_comment7a1,
                fin_eva_a_question7a2,
                fin_eva_a_comment7a2,
                fin_eva_a_question7b1,
                fin_eva_a_comment7b1,
                fin_eva_a_question7b2,
                fin_eva_a_comment7b2,
                fin_eva_a_question7b3,
                fin_eva_a_comment7b3,
                fin_eva_a_question7c,
                fin_eva_a_comment7c,
                fin_eva_a_question7d,
                fin_eva_a_comment7d,
                fin_eva_a_comment8a,
                fin_eva_a_comment8b,
                fin_eva_a_question8c,
                fin_eva_a_comment8c,
                fin_eva_a_question8d,
                fin_eva_a_comment8d,
                fin_eva_a_comment8e,
                fin_eva_a_comment8f,
                get_user_name(updated_by) AS user_name,
                updated_at
            FROM financial_policies
            WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_financial_policies');
    }
}
