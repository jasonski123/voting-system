<?php

use App\Models\Election;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $end = Carbon::now();
        $start = Carbon::now()->subYear();
        Election::create([
            'school_year_start' => $start,
            'school_year_end' => $end,
        ]);
    }
};
