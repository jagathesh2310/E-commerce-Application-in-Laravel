<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole=Role::create([
            'name' => 'super-admin'
        ]);
        $permission =Permission::get();
        foreach($permission as $key => $values){
            $adminRole->givePermissionTo($values->name);
        }
        $userRole=Role::create([
            'name'=>'user'
        ]);
        $userRole->givePermissionTo('user-panel-access');
    }
}
