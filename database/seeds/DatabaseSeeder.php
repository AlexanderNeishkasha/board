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
            'name' => 'User1',
            'password' => Hash::make('user1pass'),
            'created_at' =>  \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name' => 'User2',
            'password' => Hash::make('user2pass'),
            'created_at' =>  \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name' => 'User3',
            'password' => Hash::make('user3pass'),
            'created_at' =>  \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' =>  \Carbon\Carbon::now()->toDateTimeString()
        ]);

        $lipsum = new joshtronic\LoremIpsum();
        //Ads
        for ($i = 1; $i <= 3; $i++)
            for ($j = 0; $j < 3; $j++)
                DB::table('ads')->insert([
                    'title' => $lipsum->words(5),
                    'description' => $lipsum->words(15),
                    'author_name' => "User{$i}",
                    'created_at' =>  \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' =>  \Carbon\Carbon::now()->toDateTimeString()
                ]);
    }
}
