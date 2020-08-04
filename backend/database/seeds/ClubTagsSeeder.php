<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClubTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'id'  => 201,
            'name' => '合気道部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 202,
            'name' => 'アイスホッケー部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 203,
            'name' => 'アメリカンフットボール部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 204,
            'name' => '空手道部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 205,
            'name' => '弓道部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 206,
            'name' => '剣道部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 207,
            'name' => '航空部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 208,
            'name' => '硬式庭球部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 209,
            'name' => '硬式野球部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 210,
            'name' => '準硬式野球部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 211,
            'name' => '軟式野球部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 212,
            'name' => 'サイクリング部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 213,
            'name' => 'サッカー部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 214,
            'name' => '山岳部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 215,
            'name' => '自動車部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 216,
            'name' => '柔道部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 217,
            'name' => '少林寺拳法部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 218,
            'name' => '水泳部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 219,
            'name' => '漕艇部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 220,
            'name' => 'ソフトテニス部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 221,
            'name' => '卓球部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 222,
            'name' => 'トライアスロン部',
            'type'   => 'club',
        ]);

        DB::table('tags')->insert([
            'id'  => 223,
            'name' => 'バドミントン部',
            'type'   => 'club',
        ]);
    }
}
