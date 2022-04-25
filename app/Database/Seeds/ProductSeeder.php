<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Odol Pipsodin',
            'category' => 'utilities',
            'price' => 10000,
            'stock' => 100,
        ];

        //simple queries
        $this->db->table('products')->insert($data);

        $data = [
            'name' => 'Gayung Love',
            'category' => 'utilities',
            'price' => 15000,
            'stock' => 200,
        ];
        // using query builder
        $this->db->table('products')->insert($data);
    }
}
