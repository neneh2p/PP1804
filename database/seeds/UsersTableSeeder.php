<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('users')->insert([
       // 		['name' => 'admin',
       // 		'email' => 'phphuong0912@gmail.com',
       // 		'password' => bcrypt('12345'),
       // 		'created_at' => new Datetime(),
       // 		],
       // 	]);

       $user = User::firstOrCreate(
        ['email' => 'demo@gmail.com'],
        [
            'name' => 'admin',
            'password' => bcrypt(12345)
        ]);
    }
        //
    // public function run() 
    // {
    //     for ($i=0; $i < 10; $i++) {
    //       # code...
    //       DB::table('users')->insert([
    //         'name' => str_random(50),
    //         'email' => str_random(10) . '@gmail.com',
    //         'password' => bcrypt(str_random(10)),
    //         'created_at' => new Datetime()
    //       ]);
    //     }
    //     //factory(App\Models\Product::class, 5)->create();
    // }
}

