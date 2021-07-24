<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Admin One',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Admin Two',
                'email' => 'admin_one@admin.com',
                'password' => bcrypt('123456')
            ]
        ];
        Admin::insert($admins);
    }
}
