<?php

namespace Database\Seeders;

use App\Models\Huzas;
use App\Models\Huzott;
use App\Models\Nyeremeny;
use Illuminate\Database\Seeder;

class LottoSeeder extends Seeder
{
    public function run(): void
    {

        $draw1 = Huzas::create(['ev' => 1988, 'het' => 43]);
        $numbers1 = [3, 14, 21, 28, 33, 40];
        foreach ($numbers1 as $n) {
            Huzott::create([
                'huzasid' => $draw1->id,
                'szam'    => $n,
            ]);
        }

        Nyeremeny::insert([
            [
                'huzasid' => $draw1->id,
                'talalat' => 6,
                'darab'   => 1,
                'ertek'   => 10767529,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'huzasid' => $draw1->id,
                'talalat' => 5,
                'darab'   => 33,
                'ertek'   => 320000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $draw2 = Huzas::create(['ev' => 1988, 'het' => 44]);
        $numbers2 = [2, 8, 17, 25, 31, 42];
        foreach ($numbers2 as $n) {
            Huzott::create([
                'huzasid' => $draw2->id,
                'szam'    => $n,
            ]);
        }
        Nyeremeny::insert([
            [
                'huzasid' => $draw2->id,
                'talalat' => 6,
                'darab'   => 0,
                'ertek'   => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'huzasid' => $draw2->id,
                'talalat' => 5,
                'darab'   => 20,
                'ertek'   => 250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
