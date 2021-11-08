<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWAreaSupQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_area_sup_questions as
            SELECT area_sup_id,
                areasupq_name,
                areasupq_dob,
                date_part('year',age(areasupq_dob)) AS age,
                areasupq_year,
                areasupq_date_of_report,
                areasupq_wife,
                areasupq_children,
                areasupq_child_age,
                areasupq_comment1,
                areasupq_comment2,
                areasupq_comment3,
                areasupq_comment4,
                areasupq_comment5,
                areasupq_comment6,
                areasupq_comment7,
                areasupq_comment8,
                areasupq_comment9,
                areasupq_name_sup,
                get_user_name(updated_by) AS user_name,
                updated_at
            FROM area_sup_questions
            WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_area_sup_questions');
    }
}
