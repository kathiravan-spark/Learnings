<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         echo "---------"."\n";
         $role = new Role;
         $role->name = 'Admin';
         $role->save();
         $permissions =Permission::get();
         foreach($permissions as $key => $value){
             
             $permissionGroup = new PermissionGroup;
             $permissionGroup->name =$value['name'];
             $permissionGroup->save();
         }
    }
}
