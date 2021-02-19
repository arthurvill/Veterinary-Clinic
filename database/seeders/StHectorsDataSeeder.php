<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class StHectorsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_string = file_get_contents('C:/web/CodingBootcamp/Projects/veterinary-clinic/storage/clients.json'); // replace path with a real path
        $data = json_decode($json_string); // decode the string into data

        foreach($data as $o){
            $owner = new Owner();
            $owner->first_name = $o->first_name;
            $owner->surname = $o->surname;
            $owner->save();

            foreach($o->pets as $p){
                $pet = new Pet();
                $pet->name = $p->name;
                $pet->breed = $p->breed;
                $pet->weight = $p->weight;
                $pet->age = $p->age;
                $pet->photo = "images/" . $p->photo;
                $pet->owner_id = $owner->id;
                $pet->specie_id = 1;
                $pet->save();
            }
        }
    }
}