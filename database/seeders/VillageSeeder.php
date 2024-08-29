<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class VillageSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/storage/api/csv/villages.csv';
        $this->delimiter = ',';
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
