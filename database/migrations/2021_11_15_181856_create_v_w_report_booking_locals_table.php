<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWReportBookingLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_report_booking_locals as
            SELECT record_id,
                rec_local_area AS area,
                rec_local_district AS district,
                rec_local_local AS local,
                rec_local_prepared_by,
                rec_local_year,
                rec_local_period,
                rec_local_w_p,
                rec_local_question1,
                rec_local_comment1,
                rec_local_question2,
                rec_local_comment2,
                rec_local_question3,
                rec_local_comment3,
                rec_local_question4,
                rec_local_comment4,
                rec_local_question5,
                rec_local_comment5,
                rec_local_question6,
                rec_local_comment6,
                rec_local_question7,
                rec_local_comment7,
                rec_local_question8,
                rec_local_comment8,
                rec_local_question9,
                rec_local_comment9,
                rec_local_question10,
                rec_local_comment10,
                rec_local_question11,
                rec_local_comment11,
                rec_local_question12,
                rec_local_comment12,
                rec_local_question13,
                rec_local_comment13,
                rec_local_question14,
                rec_local_comment14,
                rec_local_question15,
                rec_local_comment15,
                rec_local_question16,
                rec_local_comment16,
                rec_local_question17,
                rec_local_comment17,
                rec_local_question18,
                rec_local_comment18,
                rec_local_question19,
                rec_local_comment19,
                rec_local_question20,
                rec_local_comment20,
                rec_local_question21,
                rec_local_comment21,
                get_user_name(updated_by) AS user_name,
                updated_at
            FROM record_books_locals
            WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_report_booking_locals');
    }
}
