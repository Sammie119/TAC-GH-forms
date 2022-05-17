<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVWFinancialAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_financial_assessments as
                SELECT financial_id,
                    fin_ass_district AS district,
                    fin_ass_area AS area,
                    fin_ass_local AS local,
                    fin_ass_status AS status,
                    fin_ass_month,
                    fin_ass_year,
                    fin_ass_tithe1,
                    fin_ass_offering1,
                    fin_ass_others1,
                    fin_ass_total1,
                    fin_ass_tithe2,
                    fin_ass_offering2,
                    fin_ass_others2,
                    fin_ass_total2,
                    fin_ass_tithe3,
                    fin_ass_offering3,
                    fin_ass_others3,
                    fin_ass_total3,
                    fin_ass_tithe4,
                    fin_ass_offering4,
                    fin_ass_others4,
                    fin_ass_total4,
                    fin_ass_tithe5,
                    fin_ass_offering5,
                    fin_ass_others5,
                    fin_ass_total5,
                    fin_ass_gdtotal,  
                    get_user_name(updated_by) AS user_name,
                    updated_at
                FROM financial_assessments
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
        DB::unprepared('DROP VIEW IF EXISTS v_w_financial_assessments');
    }
}
