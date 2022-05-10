<?php

use Illuminate\Database\Seeder;
use App\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrPets = config('pets');

        foreach($arrPets as $pet) {
            Pet::create($pet);
        }
    }
}
