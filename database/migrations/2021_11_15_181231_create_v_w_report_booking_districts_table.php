<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWReportBookingDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_report_booking_districts as
            SELECT record_id,
                rec_dist_area AS area,
                rec_dist_district AS district,
                rec_dist_prepared_by,
                rec_dist_year,
                rec_dist_period,
                rec_dist_w_p,
                rec_dist_question1,
                rec_dist_comment1,
                rec_dist_question2,
                rec_dist_comment2,
                rec_dist_question3,
                rec_dist_comment3,
                rec_dist_question4,
                rec_dist_comment4,
                rec_dist_question5,
                rec_dist_comment5,
                rec_dist_question6,
                rec_dist_comment6,
                rec_dist_question7,
                rec_dist_comment7,
                rec_dist_question8,
                rec_dist_comment8,
                rec_dist_question9,
                rec_dist_comment9,
                rec_dist_question10,
                rec_dist_comment10,
                rec_dist_question11,
                rec_dist_comment11,
                rec_dist_question12,
                rec_dist_comment12,
                rec_dist_question13,
                rec_dist_comment13,
                rec_dist_question14,
                rec_dist_comment14,
                rec_dist_question15,
                rec_dist_comment15,
                rec_dist_question16,
                rec_dist_comment16,
                rec_dist_question17,
                rec_dist_comment17,
                rec_dist_question18,
                rec_dist_comment18,
                rec_dist_question19,
                rec_dist_comment19,
                rec_dist_question20,
                rec_dist_comment20,
                rec_dist_question21,
                rec_dist_comment21,
                get_user_name(updated_by) AS user_name,
                updated_at
            FROM record_books_districts
            WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_report_booking_districts');
    }
}
