<?php

namespace Database\Seeders;

use App\Models\Bond;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $periods = [360, 364, 360];
        $kuponfaizi = 0;
        $nominalqiymet = 0;
        foreach ($periods as $period) {
            $kuponfaizi += 10;
            $nominalqiymet += 1000;
            Bond::create([
                'em_date' => '2022-07-08',
                'st_date' => '2023-07-08',
                'price' => $nominalqiymet,
                'frequency' => 4,
                'percent_period' => $period,
                'percent' => $kuponfaizi,
            ]);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
