<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('asdfasdf'),
        ]);
        $user->assignRole('user');

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('asdfasdf'),
        ]);
        $user->assignRole('admin');

        $company = Company::create([
            'name' => 'PT ApprenTech',
            'pic_name' => 'Admin ApprenTech',
            'email' => 'apprentech@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'phone' => '000000000000',
        ]);
        $company->assignRole('company');

        $company = Company::create([
            'name' => 'PT Amanah Sejahtera',
            'pic_name' => 'Salahuddin',
            'email' => 'amanah@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'phone' => '081456789012',
        ]);
        $company->assignRole('company');

        $company = Company::create([
            'name' => 'PT Aman Mental',
            'pic_name' => 'Widianto',
            'email' => 'amanmental@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'phone' => '089987654321',
        ]);
        $company->assignRole('company');

        $company = Company::create([
            'name' => 'Company',
            'pic_name' => 'Company PIC',
            'email' => 'company@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'phone' => '081234567890',
        ]);
        $company->assignRole('company');
    }
}
