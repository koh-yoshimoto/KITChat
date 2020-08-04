<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('friends')->truncate();

        $users = [
            [
                'id' => '12345678',
                'password' => Hash::make('useruser'),
                'name' => 'admin',
                'academic_year' => 'M2',
                'age' => '22',
                'gender' => '1',
                'faculty' => '',
                'department' => '',
                'club' => '1',
                'remember_token' => Str::random(10),
            ]
        ];
        factory(App\User::class, 10)->create();

        foreach (App\User::All() as $user){
            $random_friends_id = App\User::inRandomOrder()
                ->where('id', '<>', $user->id) //自分以外
                ->take(3) //友達の数
                ->pluck('id')->toArray();//user->idだけ配列化
     
            // 多対多の時はsave()ではなく、attach(配列)で保存する
            $user->friends()->attach(
                $random_friends_id
            );
        }

        // 登録
        foreach($users as $user) {
            \App\User::create($user);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
