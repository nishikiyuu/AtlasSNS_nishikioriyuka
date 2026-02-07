<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
         ['username' => 'さとみ',
        'email' => 'sss@gmail.com',
        'password' => bcrypt('ssssssss')
        ],
         ['username' => 'ころん',
        'email' => 'ccc@gmail.com',
        'password' => bcrypt('cccccccc')
        ],
         ['username' => '莉犬',
        'email' => 'rrr@gmail.com',
        'password' => bcrypt('rrrrrrrr')
        ],
         ['username' => 'ジェル',
        'email' => 'jjj@gmail.com',
        'password' => bcrypt('jjjjjjjj')
        ],
        ['username' => 'ななもり',
        'email' => 'nnn@gmail.com',
        'password' => bcrypt('nnnnnnnn')
        ]
       ]);

    }
}
