<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions =[
            [
                'name' => 'user-panel-access'
            ],
            [
                'name'=>'admin-panel-access'
            ],
        ];
        foreach($permissions as $key => $value){
            $per = new Permission;
            $per->name = $value['name'];
            $per->save();
        }
        echo "permission seeded";
    }
}
