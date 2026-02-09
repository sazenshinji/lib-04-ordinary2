<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'Giftセット (小)',
            'category_id' => 1,                                     //セット、ホールケーキ
            'image_path' => 'images/11_Giftセット.jpg',
            'price' => 1500,
            'description' => 'ちょっとした 贈り物に最適。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'くまさん、うさぎさんセット',
            'category_id' => 1,                                     //セット、ホールケーキ
            'image_path' => 'images/12_くまさんうさぎさん.jpg',
            'price' => 1500,
            'description' => 'かわいい 贈り物。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'シフォン ケーキホール販売',
            'category_id' => 1,                                     //セット、ホールケーキ
            'image_path' => 'images/13_シフォンケーキ_ホール販売.jpg',
            'price' => 4000,
            'description' => 'シフォンケーキをフォール販売します。予約してください。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '各種ディアマンクッキー',
            'category_id' => 2,                                 //焼き菓子
            'image_path' => 'images/21_ディアマンクッキー.jpg',
            'price' => 250,
            'description' => '各種のディアマンクッキーです。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'キャロットケーキ',
            'category_id' => 2,                                 //焼き菓子
            'image_path' => 'images/22_キャロットケーキ.jpg',
            'price' => 300,
            'description' => 'ナッツでザクザク、フルーツチップでしっとりなるようにイメージしました。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '抹茶のバウンドケーキ',
            'category_id' => 2,                                 //焼き菓子
            'image_path' => 'images/23_抹茶のバウンドケーキ.jpg',
            'price' => 300,
            'description' => '抹茶のパウンドケーキです。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'マロンパイ',
            'category_id' => 2,                                 //焼き菓子
            'image_path' => 'images/24_マロンパイ.jpg',
            'price' => 600,
            'description' => '市果樹園さんの不揃いの栗を使わせていただき、栗の渋皮煮と栗ペーストを仕込みました。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'サツマイモのシフォンケーキ',
            'category_id' => 3,                                 //シフォンケーキ、キッシュ
            'image_path' => 'images/31_サツマイモのシフォンケーキ.jpg',
            'price' => 500,
            'description' => '不揃いの千葉県産さつまいもをつかっています。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '抹茶のシフォンケーキ',
            'category_id' => 3,                                 //シフォンケーキ、キッシュ
            'image_path' => 'images/32_抹茶のシフォンケーキ.jpg',
            'price' => 500,
            'description' => '大人気の抹茶のシフォンケーキです。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '3種のキノコのキッシュ',
            'category_id' => 3,                                 //シフォンケーキ、キッシュ
            'image_path' => 'images/33_キノコのキッシュ.jpg',
            'price' => 600,
            'description' => 'キノコをバターで炒めました。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ほうれん草とサーモンのキッシュ',
            'category_id' => 3,                                 //シフォンケーキ、キッシュ
            'image_path' => 'images/34_ほうれん草とサーモンのキッシュ.jpg',
            'price' => 600,
            'description' => '鮭×千葉県千葉市若葉区林さん家のほうれん草×ぷるっと卵液をお楽しみください。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ソーセージデニッシュ',
            'category_id' => 4,                                 //パン
            'image_path' => 'images/41_ソーセージデニッシュ.jpg',
            'price' => 600,
            'description' => 'ソーセージを包み焼き上げました。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ハムとチーズのクロックムッシュ',
            'category_id' => 4,                                 //パン
            'image_path' => 'images/42_ハムとチーズのクロックムッシュ.jpg',
            'price' => 600,
            'description' => 'ハムとチーズをたっぷり乗せています。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
    }
}
