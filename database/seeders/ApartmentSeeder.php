<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'apartmentName' => 'A01',
                'address' => 'Hà Đông',
                'price' => 1000000,
                'generalInformation' => 'nhà đẹp dịch vụ rẻ',
                'privateInformation' => 'nhà cao cấp',
                'avatar' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fgotecland.vn',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ]
        ]);
    }
}
