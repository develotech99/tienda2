<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        // IDs de tipos (según el orden insertado por ProductoTipoSeeder)
        // 1=Bebidas, 2=Lácteos, 3=Panadería, 4=Snacks, 5=Granos
        // 6=Enlatados, 7=Higiene, 8=Limpieza, 9=Condimentos, 10=Embutidos

        $productos = [

            // ─── BEBIDAS Y GASEOSAS (tprod_id = 1) ───────────────────────────────
            ['prod_codigo' => 'BEB-001', 'prod_nombre' => 'Coca-Cola 350ml',          'prod_precio_compra' => 4.50, 'prod_precio_venta' => 7.00,  'prod_stock_minimo' => 12, 'prod_stock_actual' => 60,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-002', 'prod_nombre' => 'Coca-Cola 1.5L',           'prod_precio_compra' => 9.00, 'prod_precio_venta' => 14.00, 'prod_stock_minimo' => 6,  'prod_stock_actual' => 30,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-003', 'prod_nombre' => 'Pepsi 350ml',              'prod_precio_compra' => 4.00, 'prod_precio_venta' => 6.50,  'prod_stock_minimo' => 12, 'prod_stock_actual' => 48,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-004', 'prod_nombre' => 'Pepsi 2L',                 'prod_precio_compra' => 9.50, 'prod_precio_venta' => 15.00, 'prod_stock_minimo' => 6,  'prod_stock_actual' => 24,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-005', 'prod_nombre' => 'Agua Pura 500ml',          'prod_precio_compra' => 2.50, 'prod_precio_venta' => 4.00,  'prod_stock_minimo' => 24, 'prod_stock_actual' => 96,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-006', 'prod_nombre' => 'Agua Pura 1L',             'prod_precio_compra' => 4.00, 'prod_precio_venta' => 6.00,  'prod_stock_minimo' => 12, 'prod_stock_actual' => 48,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-007', 'prod_nombre' => 'Jugo Del Valle Naranja 1L','prod_precio_compra' => 8.00, 'prod_precio_venta' => 12.00, 'prod_stock_minimo' => 6,  'prod_stock_actual' => 36,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-008', 'prod_nombre' => 'Jugo Tropical Mango 500ml','prod_precio_compra' => 5.50, 'prod_precio_venta' => 9.00,  'prod_stock_minimo' => 12, 'prod_stock_actual' => 40,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-009', 'prod_nombre' => 'Sprite 350ml',             'prod_precio_compra' => 4.50, 'prod_precio_venta' => 7.00,  'prod_stock_minimo' => 12, 'prod_stock_actual' => 36,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-010', 'prod_nombre' => 'Fanta Naranja 350ml',      'prod_precio_compra' => 4.50, 'prod_precio_venta' => 7.00,  'prod_stock_minimo' => 12, 'prod_stock_actual' => 36,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-011', 'prod_nombre' => 'Té Lipton Limón 500ml',   'prod_precio_compra' => 5.00, 'prod_precio_venta' => 8.00,  'prod_stock_minimo' => 12, 'prod_stock_actual' => 30,  'tprod_id' => 1],
            ['prod_codigo' => 'BEB-012', 'prod_nombre' => 'Fresco Instantáneo Tang sobre','prod_precio_compra' => 1.50,'prod_precio_venta' => 2.50,'prod_stock_minimo' => 24,'prod_stock_actual' => 120,'tprod_id' => 1],

            // ─── LÁCTEOS (tprod_id = 2) ──────────────────────────────────────────
            ['prod_codigo' => 'LAC-001', 'prod_nombre' => 'Leche Entera 1L Dos Pinos',  'prod_precio_compra' => 9.00, 'prod_precio_venta' => 13.00, 'prod_stock_minimo' => 10, 'prod_stock_actual' => 50, 'tprod_id' => 2],
            ['prod_codigo' => 'LAC-002', 'prod_nombre' => 'Leche Descremada 1L',        'prod_precio_compra' => 9.50, 'prod_precio_venta' => 13.50, 'prod_stock_minimo' => 10, 'prod_stock_actual' => 40, 'tprod_id' => 2],
            ['prod_codigo' => 'LAC-003', 'prod_nombre' => 'Yogur Natural 500g',         'prod_precio_compra' => 8.00, 'prod_precio_venta' => 12.00, 'prod_stock_minimo' => 6,  'prod_stock_actual' => 24, 'tprod_id' => 2],
            ['prod_codigo' => 'LAC-004', 'prod_nombre' => 'Queso Fresco 250g',          'prod_precio_compra' => 10.00,'prod_precio_venta' => 15.00, 'prod_stock_minimo' => 6,  'prod_stock_actual' => 20, 'tprod_id' => 2],
            ['prod_codigo' => 'LAC-005', 'prod_nombre' => 'Crema de Leche 250ml',       'prod_precio_compra' => 7.00, 'prod_precio_venta' => 10.00, 'prod_stock_minimo' => 6,  'prod_stock_actual' => 18, 'tprod_id' => 2],
            ['prod_codigo' => 'LAC-006', 'prod_nombre' => 'Mantequilla 200g',            'prod_precio_compra' => 11.00,'prod_precio_venta' => 16.00, 'prod_stock_minimo' => 5,  'prod_stock_actual' => 15, 'tprod_id' => 2],

            // ─── PANADERÍA (tprod_id = 3) ────────────────────────────────────────
            ['prod_codigo' => 'PAN-001', 'prod_nombre' => 'Pan Molde Blanco 680g',     'prod_precio_compra' => 12.00,'prod_precio_venta' => 17.00, 'prod_stock_minimo' => 5, 'prod_stock_actual' => 20, 'tprod_id' => 3],
            ['prod_codigo' => 'PAN-002', 'prod_nombre' => 'Pan Molde Integral 680g',   'prod_precio_compra' => 13.00,'prod_precio_venta' => 18.00, 'prod_stock_minimo' => 5, 'prod_stock_actual' => 15, 'tprod_id' => 3],
            ['prod_codigo' => 'PAN-003', 'prod_nombre' => 'Galletas Ducales paquete',  'prod_precio_compra' => 6.00, 'prod_precio_venta' => 9.00,  'prod_stock_minimo' => 10,'prod_stock_actual' => 40, 'tprod_id' => 3],
            ['prod_codigo' => 'PAN-004', 'prod_nombre' => 'Galletas Oreo 120g',        'prod_precio_compra' => 7.50, 'prod_precio_venta' => 11.00, 'prod_stock_minimo' => 10,'prod_stock_actual' => 35, 'tprod_id' => 3],

            // ─── SNACKS Y GOLOSINAS (tprod_id = 4) ───────────────────────────────
            ['prod_codigo' => 'SNK-001', 'prod_nombre' => 'Papas Fritas Pringles 110g',  'prod_precio_compra' => 14.00,'prod_precio_venta' => 22.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 24, 'tprod_id' => 4],
            ['prod_codigo' => 'SNK-002', 'prod_nombre' => 'Papas Lay\'s Clásica 50g',   'prod_precio_compra' => 5.00, 'prod_precio_venta' => 8.00,  'prod_stock_minimo' => 12,'prod_stock_actual' => 60, 'tprod_id' => 4],
            ['prod_codigo' => 'SNK-003', 'prod_nombre' => 'Barquillo de Vainilla 25g',  'prod_precio_compra' => 1.50, 'prod_precio_venta' => 3.00,  'prod_stock_minimo' => 24,'prod_stock_actual' => 80, 'tprod_id' => 4],
            ['prod_codigo' => 'SNK-004', 'prod_nombre' => 'Chocolate Snickers 52g',     'prod_precio_compra' => 7.00, 'prod_precio_venta' => 11.00, 'prod_stock_minimo' => 12,'prod_stock_actual' => 36, 'tprod_id' => 4],
            ['prod_codigo' => 'SNK-005', 'prod_nombre' => 'Chicle Trident menta 1und',  'prod_precio_compra' => 0.80, 'prod_precio_venta' => 1.50,  'prod_stock_minimo' => 30,'prod_stock_actual' => 100,'tprod_id' => 4],
            ['prod_codigo' => 'SNK-006', 'prod_nombre' => 'Palomitas Act II Mantequilla','prod_precio_compra' => 5.50, 'prod_precio_venta' => 9.00,  'prod_stock_minimo' => 12,'prod_stock_actual' => 40, 'tprod_id' => 4],
            ['prod_codigo' => 'SNK-007', 'prod_nombre' => 'Nachos Tostitos 250g',       'prod_precio_compra' => 10.00,'prod_precio_venta' => 16.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 20, 'tprod_id' => 4],

            // ─── GRANOS Y CEREALES (tprod_id = 5) ────────────────────────────────
            ['prod_codigo' => 'GRA-001', 'prod_nombre' => 'Arroz Blanco 5 libras',     'prod_precio_compra' => 14.00,'prod_precio_venta' => 20.00, 'prod_stock_minimo' => 10,'prod_stock_actual' => 50, 'tprod_id' => 5],
            ['prod_codigo' => 'GRA-002', 'prod_nombre' => 'Frijoles Negros 1 libra',   'prod_precio_compra' => 6.00, 'prod_precio_venta' => 9.00,  'prod_stock_minimo' => 10,'prod_stock_actual' => 40, 'tprod_id' => 5],
            ['prod_codigo' => 'GRA-003', 'prod_nombre' => 'Avena Quaker 400g',         'prod_precio_compra' => 9.00, 'prod_precio_venta' => 13.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 25, 'tprod_id' => 5],
            ['prod_codigo' => 'GRA-004', 'prod_nombre' => 'Cereal Corn Flakes 500g',   'prod_precio_compra' => 16.00,'prod_precio_venta' => 24.00, 'prod_stock_minimo' => 5, 'prod_stock_actual' => 18, 'tprod_id' => 5],
            ['prod_codigo' => 'GRA-005', 'prod_nombre' => 'Pasta Espagueti 500g',      'prod_precio_compra' => 7.00, 'prod_precio_venta' => 10.00, 'prod_stock_minimo' => 10,'prod_stock_actual' => 45, 'tprod_id' => 5],

            // ─── ENLATADOS (tprod_id = 6) ────────────────────────────────────────
            ['prod_codigo' => 'ENL-001', 'prod_nombre' => 'Atún en Agua Starkist 142g','prod_precio_compra' => 10.00,'prod_precio_venta' => 15.00, 'prod_stock_minimo' => 12,'prod_stock_actual' => 48, 'tprod_id' => 6],
            ['prod_codigo' => 'ENL-002', 'prod_nombre' => 'Sardinas en Tomate 125g',   'prod_precio_compra' => 6.00, 'prod_precio_venta' => 9.00,  'prod_stock_minimo' => 12,'prod_stock_actual' => 36, 'tprod_id' => 6],
            ['prod_codigo' => 'ENL-003', 'prod_nombre' => 'Frijoles en lata 400g',     'prod_precio_compra' => 8.00, 'prod_precio_venta' => 12.00, 'prod_stock_minimo' => 10,'prod_stock_actual' => 30, 'tprod_id' => 6],

            // ─── HIGIENE PERSONAL (tprod_id = 7) ─────────────────────────────────
            ['prod_codigo' => 'HIG-001', 'prod_nombre' => 'Jabón de Baño Palmolive 90g',  'prod_precio_compra' => 4.50, 'prod_precio_venta' => 7.00,  'prod_stock_minimo' => 12,'prod_stock_actual' => 50, 'tprod_id' => 7],
            ['prod_codigo' => 'HIG-002', 'prod_nombre' => 'Shampoo Head&Shoulders 200ml', 'prod_precio_compra' => 18.00,'prod_precio_venta' => 27.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 20, 'tprod_id' => 7],
            ['prod_codigo' => 'HIG-003', 'prod_nombre' => 'Pasta Dental Colgate 75ml',    'prod_precio_compra' => 10.00,'prod_precio_venta' => 15.00, 'prod_stock_minimo' => 8, 'prod_stock_actual' => 30, 'tprod_id' => 7],
            ['prod_codigo' => 'HIG-004', 'prod_nombre' => 'Desodorante Rexona 150ml',     'prod_precio_compra' => 15.00,'prod_precio_venta' => 22.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 24, 'tprod_id' => 7],
            ['prod_codigo' => 'HIG-005', 'prod_nombre' => 'Papel Higiénico Suave x4',    'prod_precio_compra' => 18.00,'prod_precio_venta' => 26.00, 'prod_stock_minimo' => 10,'prod_stock_actual' => 40, 'tprod_id' => 7],

            // ─── LIMPIEZA DEL HOGAR (tprod_id = 8) ───────────────────────────────
            ['prod_codigo' => 'LIM-001', 'prod_nombre' => 'Detergente Ariel 1kg',       'prod_precio_compra' => 22.00,'prod_precio_venta' => 32.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 20, 'tprod_id' => 8],
            ['prod_codigo' => 'LIM-002', 'prod_nombre' => 'Cloro Blanqueador 1L',       'prod_precio_compra' => 7.00, 'prod_precio_venta' => 11.00, 'prod_stock_minimo' => 8, 'prod_stock_actual' => 30, 'tprod_id' => 8],
            ['prod_codigo' => 'LIM-003', 'prod_nombre' => 'Jabón Lavatrastos Axión 500g','prod_precio_compra' => 8.00, 'prod_precio_venta' => 12.00, 'prod_stock_minimo' => 8, 'prod_stock_actual' => 25, 'tprod_id' => 8],
            ['prod_codigo' => 'LIM-004', 'prod_nombre' => 'Suavizante Downy 800ml',     'prod_precio_compra' => 20.00,'prod_precio_venta' => 30.00, 'prod_stock_minimo' => 5, 'prod_stock_actual' => 16, 'tprod_id' => 8],
            ['prod_codigo' => 'LIM-005', 'prod_nombre' => 'Desengrasante Pinoluz 1L',   'prod_precio_compra' => 10.00,'prod_precio_venta' => 15.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 18, 'tprod_id' => 8],

            // ─── CONDIMENTOS Y SALSAS (tprod_id = 9) ─────────────────────────────
            ['prod_codigo' => 'CON-001', 'prod_nombre' => 'Aceite Vegetal Corona 1L',   'prod_precio_compra' => 15.00,'prod_precio_venta' => 22.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 30, 'tprod_id' => 9],
            ['prod_codigo' => 'CON-002', 'prod_nombre' => 'Azúcar Blanca 2kg',          'prod_precio_compra' => 12.00,'prod_precio_venta' => 18.00, 'prod_stock_minimo' => 8, 'prod_stock_actual' => 35, 'tprod_id' => 9],
            ['prod_codigo' => 'CON-003', 'prod_nombre' => 'Sal Yodada 1kg',             'prod_precio_compra' => 3.50, 'prod_precio_venta' => 6.00,  'prod_stock_minimo' => 10,'prod_stock_actual' => 50, 'tprod_id' => 9],
            ['prod_codigo' => 'CON-004', 'prod_nombre' => 'Salsa de Tomate Heinz 397g', 'prod_precio_compra' => 11.00,'prod_precio_venta' => 17.00, 'prod_stock_minimo' => 8, 'prod_stock_actual' => 28, 'tprod_id' => 9],
            ['prod_codigo' => 'CON-005', 'prod_nombre' => 'Mayonesa Hellmann\'s 430g',  'prod_precio_compra' => 16.00,'prod_precio_venta' => 24.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 20, 'tprod_id' => 9],
            ['prod_codigo' => 'CON-006', 'prod_nombre' => 'Mostaza francesa 220g',      'prod_precio_compra' => 9.00, 'prod_precio_venta' => 14.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 18, 'tprod_id' => 9],

            // ─── EMBUTIDOS Y CARNES (tprod_id = 10) ──────────────────────────────
            ['prod_codigo' => 'EMB-001', 'prod_nombre' => 'Salchichas Oscar Mayer 250g','prod_precio_compra' => 14.00,'prod_precio_venta' => 21.00, 'prod_stock_minimo' => 6, 'prod_stock_actual' => 20, 'tprod_id' => 10],
            ['prod_codigo' => 'EMB-002', 'prod_nombre' => 'Jamón de Pierna 250g',       'prod_precio_compra' => 18.00,'prod_precio_venta' => 27.00, 'prod_stock_minimo' => 5, 'prod_stock_actual' => 15, 'tprod_id' => 10],
            ['prod_codigo' => 'EMB-003', 'prod_nombre' => 'Mortadela Cunit 200g',       'prod_precio_compra' => 12.00,'prod_precio_venta' => 18.00, 'prod_stock_minimo' => 5, 'prod_stock_actual' => 12, 'tprod_id' => 10],
            ['prod_codigo' => 'EMB-004', 'prod_nombre' => 'Chorizo ahumado 200g',       'prod_precio_compra' => 15.00,'prod_precio_venta' => 22.00, 'prod_stock_minimo' => 5, 'prod_stock_actual' => 14, 'tprod_id' => 10],
        ];

        $now = now();
        $imagenes = [
            1 => 'images/productos/bebidas_gaseosas.png',
            2 => 'images/productos/lacteos.png',
            3 => 'images/productos/panaderia.png',
            4 => 'images/productos/snacks.png',
            5 => 'images/productos/granos.png',
            6 => 'images/productos/enlatados.png',
            7 => 'images/productos/higiene.png',
            8 => 'images/productos/limpieza.png',
            9 => 'images/productos/condimentos.png',
            10 => 'images/productos/embutidos.png',
        ];

        foreach ($productos as &$p) {
            $p['prod_descripcion'] = null;
            $p['prod_imagen']      = $imagenes[$p['tprod_id']] ?? null;
            $p['prod_situacion']   = 'Activo';
            $p['created_at']       = $now;
            $p['updated_at']       = $now;
        }

        DB::table('productos')->insert($productos);
    }
}
