<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ConnectRelationshipsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(BusinessesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);

        Model::reguard();
    }
}