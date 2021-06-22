<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opleidingen')->insert([
            'name' => 'Software Development',
            'description' => 'Software Development opleiding',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('klassen')->insert([
            'name' => 'SD4Y1A',
            'description' => 'Software Development klas 1a',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('klassen')->insert([
            'name' => 'SD4Y1B',
            'description' => 'Software Development klas 1a',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('klassen')->insert([
            'name' => 'SD4Y2A',
            'description' => 'Software Development klas 2a',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('klassen')->insert([
            'name' => 'SD4Y2B',
            'description' => 'Software Development klas 2a',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('cursussen')->insert([
            'naam_cursus' => 'Web Development',
            'is_afgerond' => false,
            'start'        => '2021-01-01',
            'end'          => '2021-06-30',
            'commentaar' => 'test commentaar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('cursussen')->insert([
            'naam_cursus' => 'App Development',
            'is_afgerond' => false,
            'start'        => '2021-01-01',
            'end'          => '2021-06-30',
            // 'leerjaar'     => 'leerjaar 1',
            'commentaar' => 'test commentaar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('cursussen')->insert([
            'naam_cursus' => 'Game Design',
            'is_afgerond' => false,
            'start'        => '2021-01-01',
            'end'          => '2021-06-30',
            // 'leerjaar'     => 'leerjaar 2',
            'commentaar' => 'test commentaar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('cursussen')->insert([
            'naam_cursus' => 'Software Verdieping',
            'is_afgerond' => false,
            'start'        => '2021-01-01',
            'end'          => '2021-06-30',
            // 'leerjaar'     => 'leerjaar 2',
            'commentaar' => 'test commentaar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('opdrachten_jaar1_sd_web')->insert([
            'hoofdstuk' => '1.1',
            'name' => 'Grid',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('opdrachten_jaar1_sd_app')->insert([
            'hoofdstuk' => '1.1',
            'name' => 'Wat is ionic?',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('opdrachten_jaar2_sd_gd')->insert([
            'hoofdstuk' => '1.1',
            'name' => 'Text adventure game',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('opdrachten_jaar2_sd_sv')->insert([
            'hoofdstuk' => '1.1',
            'name' => 'Unreal engine',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('docenten')->insert([
            'name' => 'travon',
            'email' => 'cudjoetravon@gmail.com',
            'wachtwoord' => 'drerrie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('leerlingen')->insert([
            'name' => 'aron',
            'email' => 'aron@vanderidder.com',
            'wachtwoord' => 'drerrie',
            // 'leerjaar'  => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        // DB::table('user')->insert([
        //     'name' => 'aron',
        //     'email' => 'aron@vanderidder.com',
        //     'wachtwoord' => 'drerrie',
        //     'leerjaar'  => 1,
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
    }
}