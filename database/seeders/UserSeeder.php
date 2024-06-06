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
            'name' => 'Company',
            'pic_name' => 'Company PIC',
            'email' => 'company@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'phone' => '081234567890',
        ]);
        $company->assignRole('company');
    }
}
