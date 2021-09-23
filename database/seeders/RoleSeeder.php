<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = Role::create(['name' => 'admin']);
        $create_articles = Permission::create(['name' => 'create articles']);
        $edit_articles = Permission::create(['name' => 'edit articles']);
        $delete_articles = Permission::create(['name' => 'delete articles']);

        $admin->givePermissionTo([$create_articles, $edit_articles, $delete_articles]);
    }
}
