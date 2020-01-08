<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'name' => 'Moda hombre',
                'slug' => str_slug('Moda hombre')
            ],
            [
                'name' => 'Moda mujer',
                'slug' => str_slug('Moda mujer')
            ],
            [
                'name' => 'Telefonía',
                'slug' => str_slug('Telefonía')
            ],
            [
                'name' => 'Informática',
                'slug' => str_slug('Informática')
            ],
            [
                'name' => 'Electrónica',
                'slug' => str_slug('Electrónica')
            ],
            [
                'name' => 'Joyería y relojes',
                'slug' => str_slug('Joyería y relojes')
            ],
            [
                'name' => 'Casa Jardín',
                'slug' => str_slug('Casa Jardín')
            ],
            [
                'name' => 'Bolsos y calzado',
                'slug' => str_slug('Bolsos y calzado')
            ],
            [
                'name' => 'Mamá y bebé',
                'slug' => str_slug('Mamá y bebé')
            ],
            [
                'name' => 'Deportes y ocio',
                'slug' => str_slug('Deportes y ocio')
            ],
            [
                'name' => 'Salud y belleza',
                'slug' => str_slug('Salud y belleza')
            ],
            [
                'name' => 'Motor',
                'slug' => str_slug('Motor')
            ]
        ]);
    }
}
