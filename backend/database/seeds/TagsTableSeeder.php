<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * データベース初期値設定の実行
         *
         * @return void
         */
        DB::table('tags')->insert([
            'name' => 'B1',
            'type' => 'academiac_year',
        ]);
        DB::table('tags')->insert([
            'name' => 'B2',
            'type' => 'academiac_year',
        ]);
        DB::table('tags')->insert([
            'name' => 'B3',
            'type' => 'academiac_year',
        ]);
        DB::table('tags')->insert([
            'name' => 'B4',
            'type' => 'academic_yeat',
        ]);
        DB::table('tags')->insert([
            'name' => 'M1',
            'type' => 'academiac_year',
        ]);
        DB::table('tags')->insert([
            'name' => 'M2',
            'type' => 'academiac_year',
        ]);
        DB::table('tags')->insert([
            'name' => 'D1',
            'type' => 'academiac_year',
        ]);
        DB::table('tags')->insert([
            'name' => 'D2',
            'type' => 'academiac_year',
        ]);
        DB::table('tags')->insert([
            'name' => 'D3',
            'type' => 'academiac_year',
        ]);
        DB::table('tags')->insert([
            'name' => 'man',
            'type' => 'gender',
        ]);
        DB::table('tags')->insert([
            'name' => 'woman',
            'type' => 'gender',
        ]);
        DB::table('tags')->insert([
            'name' => '18',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '19',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '20',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '21',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '22',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '23',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '24',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '25',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '26',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '27',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '28',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '29',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '30',
            'type' => 'age',
        ]);
        DB::table('tags')->insert([
            'name' => '工学部',
            'type' => 'faculty',
        ]);
        DB::table('tags')->insert([
            'name' => '情報工学部',
            'type' => 'faculty',
        ]);
        DB::table('tags')->insert([
            'name' => '工学府博士前期課程',
            'type' => 'faculty',
        ]);
        DB::table('tags')->insert([
            'name' => '大学院情報工学府博士前期課程',
            'type' => 'faculty',
        ]);
        DB::table('tags')->insert([
            'name' => '工学府博士後期課程',
            'type' => 'faculty',
        ]);
        DB::table('tags')->insert([
            'name' => '大学院情報工学府博士後期課程',
            'type' => 'faculty',
        ]);
        DB::table('tags')->insert([
            'name' => '生命体工学研究科博士前期課程',
            'type' => 'faculty',
        ]);
        DB::table('tags')->insert([
            'name' => '生命体工学研究科博士後期課程',
            'type' => 'faculty',
        ]);
        DB::table('tags')->insert([
            'name' => '全て対象',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '機械知能工学科',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '宇宙工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '機械工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '知能制御工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '機械工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '知能制御工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '建設社会工学科',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '建築学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '都市環境デザインコース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '建築学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '国土デザインコース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '電気電子工学科',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '電気工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '電子工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '電気エネルギー工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '電子システム工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '応用化学科',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '応用化学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => 'マテリアル工学科',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => 'マテリアル工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '総合システム工学科',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '宇宙システム工学科',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '機械宇宙システム工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '電気宇宙システム工学コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '工学１類',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '工学２類',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '工学３類',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '工学４類',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '工学５類',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department1',
        ]);
        DB::table('tags')->insert([
            'name' => '全て対象',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '知能情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'データ科学コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '人工知能コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'メディア情報学コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '情報・通信工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'ソフトウェアデザインコース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '情報通信ネットワークコース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'コンピュータ工学コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'ソフトウェアデザインコース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '(編入)',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '知的システム工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'ロボティクスコース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'システム制御コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '先進機械コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '物理情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '電子物理工学コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '生物物理工学コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '生命化学情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '分子生命工学コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '医用生命工学コース',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '知能情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '知能情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '知能情報工学科（編入）',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '電子情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '電子情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '電子情報工学科（編入）',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'システム創成情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'システム創成情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'システム創成情報工学科（編入）',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '機械情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '機械情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '機械情報工学科（編入）',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '生命情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '生命情報工学科',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '生命情報工学科（編入）',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '情工１類',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'Ⅰクラス',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'Ⅱクラス',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '情工２類',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'Ⅲクラス',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '情工３類',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'Ⅳクラス',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => 'Ⅴクラス',
            'type' => 'department2',
        ]);
        DB::table('tags')->insert([
            'name' => '全て対象',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '機械知能工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '宇宙工学コース',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '機械工学コース',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '宇宙工学コース（国際）',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '建設社会工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '建築学コース',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '物質工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '応用化学コース',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => 'マテリアル工学コース',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '電気電子工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '電気工学コース',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '電子工学コース',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '先端機能システム工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '先端機能システム（国際）',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department3',
        ]);
        DB::table('tags')->insert([
            'name' => '全て対象',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => '情報創成工学専攻',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => '情報創成工学専門分野',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => '先端情報工学専攻',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => '知能情報工学専門分野',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => '電子情報工学専門分野',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => '学際情報工学専攻',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => 'システム創成情報工学専門分野',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => '生命情報工学専門分野',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => '機械情報工学専門分野',
            'type' => 'department4',
        ]);
        DB::table('tags')->insert([
            'name' => '全て対象',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '機械知能工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '知能制御工学コース',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '電気電子工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '電気エネルギーコース',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '先端機能システム工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '先端機能システム（国際）',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '機械知能工学領域',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '建設社会工学領域',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '電気電子工学領域',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '物質工学領域',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '先端機能システム工学領域',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '機械知能工学領域（国際）',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '建設社会工学領域（国際）',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '電気電子工学領域（国際）',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '先端機能システム工学領域（国際）',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '工学専攻',
            'type' => 'department5',
        ]);
        DB::table('tags')->insert([
            'name' => '全て対象',
            'type' => 'department6',
        ]);
        DB::table('tags')->insert([
            'name' => '情報工学専攻',
            'type' => 'department6',
        ]);
        DB::table('tags')->insert([
            'name' => '知能情報工学専門分野',
            'type' => 'department6',
        ]);
        DB::table('tags')->insert([
            'name' => '全て対象',
            'type' => 'department7',
        ]);
        DB::table('tags')->insert([
            'name' => '生体機能応用工学専攻',
            'type' => 'department7',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department7',
        ]);
        DB::table('tags')->insert([
            'name' => '人間知能システム工学専攻',
            'type' => 'department7',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department7',
        ]);
        DB::table('tags')->insert([
            'name' => '全て対象',
            'type' => 'department8',
        ]);
        DB::table('tags')->insert([
            'name' => '生体機能専攻',
            'type' => 'department8',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department8',
        ]);
        DB::table('tags')->insert([
            'name' => '脳情報専攻',
            'type' => 'department8',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department8',
        ]);
        DB::table('tags')->insert([
            'name' => '生命体工学専攻',
            'type' => 'department8',
        ]);
        DB::table('tags')->insert([
            'name' => '共通コース',
            'type' => 'department8',
        ]);
    }
}
