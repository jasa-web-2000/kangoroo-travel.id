<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Schema;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;

class JawaBaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // php artisan migrate:fresh --seed --seeder=JawaBaliSeeder
        $this->call([
            ProvincesSeeder::class,
            CitiesSeeder::class,
            DistrictsSeeder::class,
        ]);

        $provinceCode = [13, 16, 17, 18, 31, 32, 33, 34, 35, 36, 51];

        $cityCode = DB::table('indonesia_cities')
            ->whereIn('province_code', $provinceCode)
            ->pluck('code');

        DB::table('indonesia_districts')
            ->whereNotIn('city_code', $cityCode)
            ->delete();

        DB::table('indonesia_cities')
            ->whereNotIn('province_code', $provinceCode)
            ->delete();

        DB::table('indonesia_provinces')
            ->whereNotIn('code', $provinceCode)
            ->delete();


        $publicTransportation = ['BANDARA', 'TERMINAL', 'STASIUN', 'PELABUHAN'];
        foreach ($publicTransportation as $index => $name) {
            DB::table('indonesia_provinces')->insert([
                'code' => 1 + $index,
                'name' => $name,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ]);
        }
    }
}
