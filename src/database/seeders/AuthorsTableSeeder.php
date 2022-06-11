<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'fullname' => '藤田　峻介',
            'gender' => '1',
            'email' => 'shunsuke@jp.com',
            'postcode' => '879-1502',
            'address' =>'千葉県佐倉市',
            'building_name' =>'テラス席',
            'opinion' => 'hello'
        ];
        DB::table('contacts')->insert($param);
    }
}
