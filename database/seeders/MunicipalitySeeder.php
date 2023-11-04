<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Artemisa */
        Municipality::create(
            [
                'name' => 'Alquizar',
                'province_id' => 1,
            ]
        );
        Municipality::create(
            [
                'name' => 'Artemisa',
                'province_id' => 1,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Bauta',
                'province_id' => 1,
            ]
        );
        Municipality::create(
            [
                'name' => 'Caimito',
                'province_id' => 1,
            ]
        );
        Municipality::create(
            [
                'name' => 'Guanajay',
                'province_id' => 1,
            ]
        );
        Municipality::create(
            [
                'name' => 'Güira de Melena',
                'province_id' => 1,
            ]
        );
        Municipality::create(
            [
                'name' => 'Mariel',
                'province_id' => 1,
            ]
        );
        Municipality::create(
            [
                'name' => 'San Antonio de los Baños',
                'province_id' => 1,
            ]
        );
        Municipality::create(
            [
                'name' => 'Bahía Honda',
                'province_id' => 1,
            ]
        );
        Municipality::create(
            [
                'name' => 'San Cristóbal',
                'province_id' => 1,
            ]
        );
        Municipality::create(
            [
                'name' => 'Candelaria',
                'province_id' => 1,
            ]
        );
        /* ************************************************************ */
        /* Camaguey */
        Municipality::create(
            [
                'name' => 'Camagüey',
                'province_id' => 2,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Carlos Manuel de Céspedes',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Esmeralda',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Florida',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Guaimaro',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Jimagüayú',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Minas',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Najasa',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Nuevitas',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Santa Cruz del Sur',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Sibanicú',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Sierra de Cubitas',
                'province_id' => 2,
            ]
        );
        Municipality::create(
            [
                'name' => 'Vertientes',
                'province_id' => 2,
            ]
        );

        /* **************************************************************** */
        /* Ciego de Avila */

        Municipality::create(
            [
                'name' => 'Ciego de Ávila',
                'province_id' => 3,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Ciro Redondo',
                'province_id' => 3,
            ]
        );
        Municipality::create(
            [
                'name' => 'Baraguá',
                'province_id' => 3,
            ]
        );
        Municipality::create(
            [
                'name' => 'Bolivia',
                'province_id' => 3,
            ]
        );
        Municipality::create(
            [
                'name' => 'Chambas',
                'province_id' => 3,
            ]
        );
        Municipality::create(
            [
                'name' => 'Florencia',
                'province_id' => 3,
            ]
        );
        Municipality::create(
            [
                'name' => 'Majagua',
                'province_id' => 3,
            ]
        );
        Municipality::create(
            [
                'name' => 'Morón',
                'province_id' => 3,
            ]
        );
        Municipality::create(
            [
                'name' => 'Primero de Enero',
                'province_id' => 3,
            ]
        );
        Municipality::create(
            [
                'name' => 'Venezuela',
                'province_id' => 3,
            ]
        );

        /* **************************************************************************** */

        /* Cienfuegos */

        Municipality::create(
            [
                'name' => 'Cienfuegos',
                'province_id' => 4,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Aguada de Pasajeros',
                'province_id' => 4,
            ]
        );
        Municipality::create(
            [
                'name' => 'Cruces',
                'province_id' => 4,
            ]
        );
        Municipality::create(
            [
                'name' => 'Cumanayagua',
                'province_id' => 4,
            ]
        );
        Municipality::create(
            [
                'name' => 'Palmira',
                'province_id' => 4,
            ]
        );
        Municipality::create(
            [
                'name' => 'Rodas',
                'province_id' => 4,
            ]
        );
        Municipality::create(
            [
                'name' => 'Santa Isabel de las Lajas',
                'province_id' => 4,
            ]
        );

        /* ****************************************************************************** */
        /* Granma */

        Municipality::create(
            [
                'name' => 'Bayamo',
                'province_id' => 5,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Bartolomé Masó',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Buey Arriba',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Campechuela',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Cauto Cristo',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Guisa',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Jiguaní',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Manzanillo',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Media Luna',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Niquero',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Pilón',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Río Cauto',
                'province_id' => 5,
            ]
        );
        Municipality::create(
            [
                'name' => 'Yara',
                'province_id' => 5,
            ]
        );

        /* ************************************************************* */
        /* Guantanamo */
        Municipality::create(
            [
                'name' => 'Guantánamo',
                'province_id' => 6,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Baracoa',
                'province_id' => 6,
            ]
        );
        Municipality::create(
            [
                'name' => 'Caimanera',
                'province_id' => 6,
            ]
        );
        Municipality::create(
            [
                'name' => 'El Salvador',
                'province_id' => 6,
            ]
        );
        Municipality::create(
            [
                'name' => 'Imías',
                'province_id' => 6,
            ]
        );
        Municipality::create(
            [
                'name' => 'Maisí',
                'province_id' => 6,
            ]
        );
        Municipality::create(
            [
                'name' => 'Manuel Tames',
                'province_id' => 6,
            ]
        );
        Municipality::create(
            [
                'name' => 'Niceto Pérez',
                'province_id' => 6,
            ]
        );
        Municipality::create(
            [
                'name' => 'San Antonio del Sur',
                'province_id' => 6,
            ]
        );
        Municipality::create(
            [
                'name' => 'Yateras',
                'province_id' => 6,
            ]
        );

        /* ********************************************************* */
        /* Holguin */
        Municipality::create(
            [
                'name' => 'Holguín',
                'province_id' => 7,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Antilla',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Báguanos',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Banes',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Cacocum',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Calixto García',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Cueto',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Frank País',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Gibara',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Mayarí',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Moa',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Rafael Freyre',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Sagua de Tánamo',
                'province_id' => 7,
            ]
        );
        Municipality::create(
            [
                'name' => 'Urbano Noris',
                'province_id' => 7,
            ]
        );

        /* ******************************************************************** */
        /* La Habana */
        Municipality::create(
            [
                'name' => 'Plaza',
                'province_id' => 8,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Arroyo Naranjo',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Boyeros',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Cerro',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Cotorro',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Diez de Octubre',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Guanabacoa',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Habana del Este',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Habana Vieja',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'La Lisa',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Marianao',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Playa',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Regla',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'San Miguel del Padrón',
                'province_id' => 8,
            ]
        );
        Municipality::create(
            [
                'name' => 'Centro Habana',
                'province_id' => 8,
            ]
        );
        /* ************************************************************* */
        /* Las Tunas */
        Municipality::create(
            [
                'name' => 'Las Tunas',
                'province_id' => 9,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Amancio Rodríguez',
                'province_id' => 9,
            ]
        );
        Municipality::create(
            [
                'name' => 'Colombia',
                'province_id' => 9,
            ]
        );
        Municipality::create(
            [
                'name' => 'Jesús Menéndez',
                'province_id' => 9,
            ]
        );
        Municipality::create(
            [
                'name' => 'Jobabo',
                'province_id' => 9,
            ]
        );
        Municipality::create(
            [
                'name' => 'Majibacoa',
                'province_id' => 9,
            ]
        );
        Municipality::create(
            [
                'name' => 'Manatí',
                'province_id' => 9,
            ]
        );
        Municipality::create(
            [
                'name' => 'Puerto Padre',
                'province_id' => 9,
            ]
        );
        /* ********************************************************************** */
        /* Matanzas */
        Municipality::create(
            [
                'name' => 'Matanzas',
                'province_id' => 10,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Calimete',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Cárdenas',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Ciénaga de Zapata',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Colón',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Jagüey Grande',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Jovellanos',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Limonar',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Los Arabos',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Martí',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Pedro Betancourt',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Perico',
                'province_id' => 10,
            ]
        );
        Municipality::create(
            [
                'name' => 'Unión de Reyes',
                'province_id' => 10,
            ]
        );
        /* ****************************************************************** */
        /* Mayabeque */
        Municipality::create(
            [
                'name' => 'San José de las Lajas',
                'province_id' => 11,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Batabanó',
                'province_id' => 11,
            ]
        );
        Municipality::create(
            [
                'name' => 'Bejucal',
                'province_id' => 11,
            ]
        );
        Municipality::create(
            [
                'name' => 'Güines',
                'province_id' => 11,
            ]
        );
        Municipality::create(
            [
                'name' => 'Jaruco',
                'province_id' => 11,
            ]
        );
        Municipality::create(
            [
                'name' => 'Madruga',
                'province_id' => 11,
            ]
        );
        Municipality::create(
            [
                'name' => 'Melena del Sur',
                'province_id' => 11,
            ]
        );
        Municipality::create(
            [
                'name' => 'Nueva Paz',
                'province_id' => 11,
            ]
        );
        Municipality::create(
            [
                'name' => 'Quivicán',
                'province_id' => 11,
            ]
        );
        Municipality::create(
            [
                'name' => 'San Nicolás de Bari',
                'province_id' => 11,
            ]
        );
        Municipality::create(
            [
                'name' => 'Santa Cruz del Norte',
                'province_id' => 11,
            ]
        );
        /* ***************************************************************** */
        /* Pinar del Río */
        Municipality::create(
            [
                'name' => 'Pinar del Río',
                'province_id' => 12,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Consolación del Sur',
                'province_id' => 12,
            ]
        );
        Municipality::create(
            [
                'name' => 'Guane',
                'province_id' => 12,
            ]
        );
        Municipality::create(
            [
                'name' => 'La Palma',
                'province_id' => 12,
            ]
        );
        Municipality::create(
            [
                'name' => 'Los Palacios',
                'province_id' => 12,
            ]
        );
        Municipality::create(
            [
                'name' => 'Mantua',
                'province_id' => 12,
            ]
        );
        Municipality::create(
            [
                'name' => 'Minas de Matahambre',
                'province_id' => 12,
            ]
        );
        Municipality::create(
            [
                'name' => 'San Juan y Martínez',
                'province_id' => 12,
            ]
        );
        Municipality::create(
            [
                'name' => 'San Luis',
                'province_id' => 12,
            ]
        );
        Municipality::create(
            [
                'name' => 'Sandino',
                'province_id' => 12,
            ]
        );
        Municipality::create(
            [
                'name' => 'Viñales',
                'province_id' => 12,
            ]
        );
        /* ************************************************************ */
        /* Sancti Spíritus */
        Municipality::create(
            [
                'name' => 'Sancti Spíritus',
                'province_id' => 13,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Cabaigúan',
                'province_id' => 13,
            ]
        );
        Municipality::create(
            [
                'name' => 'Fomento',
                'province_id' => 13,
            ]
        );
        Municipality::create(
            [
                'name' => 'Jatibonico',
                'province_id' => 13,
            ]
        );
        Municipality::create(
            [
                'name' => 'La Sierpe',
                'province_id' => 13,
            ]
        );
        Municipality::create(
            [
                'name' => 'Taguasco',
                'province_id' => 13,
            ]
        );
        Municipality::create(
            [
                'name' => 'Trinidad',
                'province_id' => 13,
            ]
        );
        Municipality::create(
            [
                'name' => 'Yaguajay',
                'province_id' => 13,
            ]
        );
        /* ********************************************** */
        /* Santiago de Cuba */
        Municipality::create(
            [
                'name' => 'Santiago de Cuba',
                'province_id' => 14,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Contramaestre',
                'province_id' => 14,
            ]
        );
        Municipality::create(
            [
                'name' => 'Guamá',
                'province_id' => 14,
            ]
        );
        Municipality::create(
            [
                'name' => 'Julio Antonio Mella',
                'province_id' => 14,
            ]
        );
        Municipality::create(
            [
                'name' => 'Palma Soriano',
                'province_id' => 14,
            ]
        );
        Municipality::create(
            [
                'name' => 'San Luis',
                'province_id' => 14,
            ]
        );
        Municipality::create(
            [
                'name' => 'Segundo Frente',
                'province_id' => 14,
            ]
        );
        Municipality::create(
            [
                'name' => 'Songo la Maya',
                'province_id' => 14,
            ]
        );
        Municipality::create(
            [
                'name' => 'Tercer Frente',
                'province_id' => 14,
            ]
        );
        /* ********************************************************** */
        /* Villa Clara */
        Municipality::create(
            [
                'name' => 'Santa Clara',
                'province_id' => 15,
                'province_capital' => true
            ]
        );
        Municipality::create(
            [
                'name' => 'Caibarién',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Camajuaní',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Cifuentes',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Corralillo',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Encrucijada',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Manicaragua',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Placetas',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Quemado de Güines',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Ranchuelo',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Sagua la Grande',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Santo Domingo',
                'province_id' => 15,
            ]
        );
        Municipality::create(
            [
                'name' => 'Remedios',
                'province_id' => 15,
            ]
        );
    }
}
