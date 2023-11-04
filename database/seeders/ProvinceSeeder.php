<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create([
            'name' => 'Artemisa',
            'short_name' => 'ART'
        ]);
        Province::create([
            'name' => 'Camagüey',
            'short_name' => 'CMG'
        ]);
        Province::create([
            'name' => 'Ciego de Ávila',
            'short_name' => 'CAV'
        ]);
        Province::create([
            'name' => 'Cienfuegos',
            'short_name' => 'CFG'
        ]);
        Province::create([
            'name' => 'Granma',
            'short_name' => 'GRM'
        ]);
        Province::create([
            'name' => 'Guantánamo',
            'short_name' => 'GTM'
        ]);
        Province::create([
            'name' => 'Holguín',
            'short_name' => 'HOL'
        ]);
        
        Province::create([
            'name' => 'La Habana',
            'short_name' => 'LHA',
            'capital' => true
        ]);
        Province::create([
            'name' => 'Las Tunas',
            'short_name' => 'LTN'
        ]);
        Province::create([
            'name' => 'Matanzas',
            'short_name' => 'MTZ'
        ]);
        Province::create([
            'name' => 'Mayabeque',
            'short_name' => 'MAY'
        ]);
        Province::create([
            'name' => 'Pinar del Río',
            'short_name' => 'PNR'
        ]);
        Province::create([
            'name' => 'Sancti Spíritus',
            'short_name' => 'SSP'
        ]);
        Province::create([
            'name' => 'Santiago de Cuba',
            'short_name' => 'SCU'
        ]);
        Province::create([
            'name' => 'Villa Clara',
            'short_name' => 'VCL'
        ]);

        Province::create([
            'name' => 'Isla de la Juventud',
            'short_name' => 'ILJ'
        ]);
    }
}
