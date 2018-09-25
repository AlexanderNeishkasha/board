<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //users
        DB::table('users')->insert([
            'name' => 'User',
            'password' => Hash::make('userpass')
        ]);
        DB::table('users')->insert([
            'name' => 'User2',
            'password' => Hash::make('user2pass')
        ]);
        DB::table('users')->insert([
            'name' => 'User3',
            'password' => Hash::make('user3pass')
        ]);

        //Ads
        DB::table('ads')->insert([
            'title' => 'Progressively network resource sucking technology',
            'description' => 'Monotonectally maintain client-focused value rather than transparent manufactured products. Appropriately.',
            'author_name' => 'User'
        ]);
    }
}
