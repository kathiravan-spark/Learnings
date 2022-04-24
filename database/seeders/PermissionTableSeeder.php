<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission=[
            [
                'name' => 'sell Product',
                'permission_group_id' => PermissionGroup::where('name','seller')->first()->id,
            ], 
            [
                'name' => 'Edit Product',
                'permission_group_id' => PermissionGroup::where('name','seller')->first()->id,
            ],
            [
                'name' => 'Delete Product',
                'permission_group_id' => PermissionGroup::where('name','seller')->first()->id,
            ],
            [
                'name' => 'buy Product',
                'permission_group_id' => PermissionGroup::where('name','buyer')->first()->id,
            ],
            [
                'name' => 'Edit Product',
                'permission_group_id' => PermissionGroup::where('name','buyer')->first()->id,
            ],
            [
                'name' => 'Delete Product',
                'permission_group_id' => PermissionGroup::where('name','buyer')->first()->id,
            ],
         ];
 
         echo "---------"."\n";
         foreach($permission as $key => $value){
             $permission = new PermissionGroup();
             $permission->name =$value['name'];
             $permission->save();
         }
    }
}
