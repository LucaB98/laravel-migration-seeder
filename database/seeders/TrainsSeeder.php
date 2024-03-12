<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train();
        $new_train->azienda = 'ITALO';
        $new_train->station_start = 'TORINO PORTA NUOVA';
        $new_train->station_end = 'MILANO CENTRALE';
        $new_train->hours_start = '10:00';
        $new_train->hours_end = '12:00';
        $new_train->code_train = '1234567891';
        $new_train->n_carrozze = '8';
        $new_train->in_orario = 0;
        $new_train->cancellato = 0;

        $new_train->save();
    }
}
