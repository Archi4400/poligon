<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'      => 'Автор не известен',
                'email'     => 'author_uknowed@gmail.com',
                'password'  => bcrypt(str_random(16)),
            ],
            [
                'name'      => 'Автор',
                'email'     => 'authord@gmail.com',
                'password'  => bcrypt('123123'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
