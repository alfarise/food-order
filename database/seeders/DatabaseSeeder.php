<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'id' => '1',
            'customer_name' => 'Dummy Customers',
            'customer_table' => '76',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        
        DB::table('employees')->insert([
            'id' => '1',
            'employee_name' => 'Dummy Employee',
            'employee_email' => 'DummyEmployee@ind.id',
            'employee_password' => 'DummyEmployeePassword',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('menus')->insert([
            'id' => '1',
            'menu_name' => 'Kinder Joy',
            'menu_type' => 'Snack',
            'menu_price' => 12000,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('menu_stocks')->insert([
            'id' => '1',
            'menu_id' => 1,
            'stock' => 99,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('orders')->insert([
            'id' => '1',
            'customer_id' => 1,
            'employee_id' => 1,
            'menu_id' => 1,
            'qty' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
