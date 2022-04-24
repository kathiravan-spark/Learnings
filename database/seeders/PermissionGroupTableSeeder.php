<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Seeder;

class PermissionGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissionGroups=[
           [
               'name' => 'seller'
           ],
           [
               'name' => 'buyer'
           ],
        ];

        echo "---------"."\n";
        foreach($permissionGroups as $key => $value){
            $permissionGroup = new PermissionGroup;
            $permissionGroup->name =$value['name'];
            $permissionGroup->save();
        }


    }
}
