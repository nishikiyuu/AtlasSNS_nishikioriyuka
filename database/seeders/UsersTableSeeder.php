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
        'password' => bcrypt('sss'),
        ],
         ['username' => 'ころん',
        'email' => 'ccc@gmail.com',
        'password' => bcrypt('ccc')
        ],
         ['username' => 'りいぬ',
        'email' => 'rrr@gmail.com',
        'password' => bcrypt('rrr')
        ],
         ['username' => 'ジェル',
        'email' => 'jjj@gmail.com',
        'password' => bcrypt('jjj')
        ],
         ['username' => 'ななもり',
        'email' => 'nnn@gmail.com',
        'password' => bcrypt('nnn')
        ]
       ]);

    }
}
