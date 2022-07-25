<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use App\Models\Status;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class InstallController extends Controller
{
    public function install()
    {
        // Permission::create(['name' => 'manage_content']);
        // Permission::create(['name' => 'manage_system']);
        // Permission::create(['name' => 'manage_users']);

        // $admin=Role::findByName('Administrator');

        // $admin = Role::create(['name' => 'Administrator']);
        // $admin->givePermissionTo('manage_content');
        // $admin->givePermissionTo('manage_system');
        // $admin->givePermissionTo('manage_users');

        // $coordinator=Role::findByName('Coordinator');

        // $coordinator = Role::create(['name' => 'Coordinator']);
        // $coordinator->givePermissionTo('manage_content');
        // $coordinator->givePermissionTo('manage_users');


        // statues
        // Status::create(['name' => 'Activo',]);//1
        // Status::create(['name' => 'Pendiente',]);//2
        // Status::create(['name' => 'Archivado',]);//3
        // Status::create(['name' => 'Pagado',]);//4
        // Status::create(['name' => 'Cancelado',]);//5

        echo 'Instalacion completada';
    }
}
