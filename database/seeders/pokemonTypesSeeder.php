<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class pokemonTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => "normální", "barva" => "#ffffff"],
            ['name' => "travní", "barva" => "#228b22"],
            ['name' => "vodní", "barva" => "#1e90ff"],
            ['name' => "ohnivý", "barva" => "#ff4500"],
            ['name' => "elektrický", "barva" => "#ffd700"],
            ['name' => "psychický", "barva" => "#da70d6	"],
            ['name' => "bojový", "barva" => "#cd5c5c"],
            ['name' => "temný", "barva" => "#696969"],
            ['name' => "kamenný", "barva" => "#deb887"],
            ['name' => "železný", "barva" => "#4682b4"],
            ['name' => "dračí", "barva" => "#b8860b"],
        ];

        foreach($types as $typ)
        {
            $newRecord = new Type();
            $newRecord->nazev = $typ['name'];
            $newRecord->hex_barva = $typ['barva'];
            $newRecord->save();
        }

    }
}
