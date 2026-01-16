<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $role = Role::create(['name' => 'Super Admin']);
        $role = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'User']);
        $role = Role::create(['name' => 'Guest']);
        $user = User::create([
            'name' => 'Krs Global Research',
            'email' => 'info@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '8700386509',
            'address' => 'Pocket A St. Pocket 3C, Pocket 4, Sector 16B Dwarka, Dwarka, New Delhi -110078',
        ]);

        $user->assignRole(1);

    }
}
