<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWReportBookingAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_report_booking_areas as
            SELECT record_id,
                rec_area_area AS area,
                rec_area_prepared_by,
                rec_area_year,
                rec_area_period,
                rec_area_w_p,
                rec_area_question1,
                rec_area_comment1,
                rec_area_question2,
                rec_area_comment2,
                rec_area_question3,
                rec_area_comment3,
                rec_area_question4,
                rec_area_comment4,
                rec_area_question5,
                rec_area_comment5,
                rec_area_question6,
                rec_area_comment6,
                rec_area_question7,
                rec_area_comment7,
                rec_area_question8,
                rec_area_comment8,
                rec_area_question9,
                rec_area_comment9,
                rec_area_question10,
                rec_area_comment10,
                rec_area_question11,
                rec_area_comment11,
                rec_area_question12,
                rec_area_comment12,
                rec_area_question13,
                rec_area_comment13,
                rec_area_question14,
                rec_area_comment14,
                rec_area_question15,
                rec_area_comment15,
                rec_area_question16,
                rec_area_comment16,
                rec_area_question17,
                rec_area_comment17,
                rec_area_question18,
                rec_area_comment18,
                rec_area_question19,
                rec_area_comment19,
                rec_area_question20,
                rec_area_comment20,
                rec_area_question21,
                rec_area_comment21,
                get_user_name(updated_by) AS user_name,
                updated_at
            FROM record_books_areas
            WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_report_booking_areas');
    }
}
