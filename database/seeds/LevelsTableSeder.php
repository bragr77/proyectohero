<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('levels')->truncate();

        $xp = 100;

        for ($i=0; $i < 10; $i++) {

            $xp = $xp * 2;
            DB::table('levels')->insert([
                'xp' => $xp
            ]);

        }
    }
}
