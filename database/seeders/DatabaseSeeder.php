<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\HomeAbout;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Feri susmiyanto',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        DB::table('home_abouts')->insert([
            'title' => 'Sekolah Di Indonesia',
            'short_discrp' => 'Sekolahan adalah sebuah homonim karena arti-artinya memiliki ejaan dan pelafalan yang sama tetapi maknanya berbeda.',
            'long_discrp' => 'Sekolahan memiliki arti dalam kelas nomina atau kata benda sehingga sekolahan dapat menyatakan nama dari seseorang, tempat, atau semua benda dan segala yang dibendakan.'
        ]);

    }
}
