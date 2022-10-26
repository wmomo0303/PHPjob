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
        $param =
            [
                
                    'name' => '青山',
                    'email' => 'user01@gmail.com',
                    'password' => bcrypt('aaaaaaaa')];
            DB::table('users')->insert($param);

                
        $param =  [
                    'name' => 'ばぬし',
                    'email' => 'user02@gmail.com',
                    'password' => bcrypt('bbbbbbbb')];
        DB::table('users')->insert($param);

        $param =
                 [
                    'name' => 'とんがりコーン',
                    'email' => 'user03@gmail.com',
                    'password' => bcrypt('cccccccc')];
            DB::table('users')->insert($param);

        $param =
                [
                    'name' => 'hime**',
                    'email' => 'user04@gmail.com',
                    'password' => bcrypt('dddddddd')];
            DB::table('users')->insert($param);



            
    }
}
