<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('club')->insert([
            'club_id'  => 201,
            'clubname' => '合気道部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 202,
            'clubname' => 'アイスホッケー部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 203,
            'clubname' => 'アメリカンフットボール部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 204,
            'clubname' => '空手道部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 205,
            'clubname' => '弓道部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 206,
            'clubname' => '剣道部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 207,
            'clubname' => '航空部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 208,
            'clubname' => '硬式庭球部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 209,
            'clubname' => '硬式野球部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 210,
            'clubname' => '準硬式野球部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 211,
            'clubname' => '軟式野球部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 212,
            'clubname' => 'サイクリング部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 213,
            'clubname' => 'サッカー部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 214,
            'clubname' => '山岳部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 215,
            'clubname' => '自動車部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 216,
            'clubname' => '柔道部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 217,
            'clubname' => '少林寺拳法部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 218,
            'clubname' => '水泳部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 219,
            'clubname' => '漕艇部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 220,
            'clubname' => 'ソフトテニス部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 221,
            'clubname' => '卓球部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 222,
            'clubname' => 'トライアスロン部',
            'member'   => 12345678,
        ]);

        DB::table('club')->insert([
            'club_id'  => 223,
            'clubname' => 'バドミントン部',
            'member'   => 12345678,
        ]);

    }
}
