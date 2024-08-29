<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class DistrictSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/storage/api/csv/districts.csv';
        $this->delimiter = ',';
        $this->foreignKeyCheck = true;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::disableQueryLog();
        parent::run();
    }
}
