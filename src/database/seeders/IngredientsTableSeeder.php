<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => '小麦粉',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => '卵',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'バター',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => '砂糖',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'チーズ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => '抹茶',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'ナッツ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => '栗',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'さつまいも',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'フルーツチップ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'チョコレート',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => '人参',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'ほうれん草',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'きのこ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'サーモン',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'ソーセージ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
        $param = [
            'name' => 'ハム',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('ingredients')->insert($param);
    }
}
