<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTipoSeeder extends Seeder
{
    public function run(): void
    {
        $tipos = [
            ['tprod_nombre' => 'Bebidas y Gaseosas',     'tprod_desc' => 'Refrescos, gaseosas, aguas y jugos embotellados', 'tprod_situacion' => 1],
            ['tprod_nombre' => 'Lácteos',                'tprod_desc' => 'Leche, queso, yogur, crema y mantequilla',        'tprod_situacion' => 1],
            ['tprod_nombre' => 'Panadería y Repostería', 'tprod_desc' => 'Pan, galletas, bizcochos y productos de horno',   'tprod_situacion' => 1],
            ['tprod_nombre' => 'Snacks y Golosinas',     'tprod_desc' => 'Papas fritas, palomitas, chocolates y dulces',    'tprod_situacion' => 1],
            ['tprod_nombre' => 'Granos y Cereales',      'tprod_desc' => 'Arroz, frijoles, maíz, avena y cereales',         'tprod_situacion' => 1],
            ['tprod_nombre' => 'Enlatados y Conservas',  'tprod_desc' => 'Atún, sardina, vegetales y frutas en lata',       'tprod_situacion' => 1],
            ['tprod_nombre' => 'Higiene Personal',        'tprod_desc' => 'Jabón, shampoo, desodorante, pasta dental',       'tprod_situacion' => 1],
            ['tprod_nombre' => 'Limpieza del Hogar',     'tprod_desc' => 'Detergente, cloro, jabón lavatrastos, escoba',    'tprod_situacion' => 1],
            ['tprod_nombre' => 'Condimentos y Salsas',   'tprod_desc' => 'Sal, azúcar, aceite, vinagre, salsa de tomate',  'tprod_situacion' => 1],
            ['tprod_nombre' => 'Embutidos y Carnes',     'tprod_desc' => 'Salchichas, jamón, mortadela, chorizo',           'tprod_situacion' => 1],
        ];

        DB::table('producto_tipo')->insert($tipos);
    }
}
