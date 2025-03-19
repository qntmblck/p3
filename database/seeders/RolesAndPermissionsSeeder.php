<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Definir permisos
        $permissions = [
            'crear viajes',
            'iniciar viajes',
            'entregar viajes',
            'cerrar viajes',
            'ver reportes'
        ];

        // Crear permisos si no existen
        foreach ($permissions as $permission) {
            if (!Permission::where('name', $permission)->exists()) {
                Permission::create(['name' => $permission]);
            }
        }

        // Crear roles y asignar permisos
        $roleGerente = Role::firstOrCreate(['name' => 'gerente']);
        $roleGerente->givePermissionTo('crear viajes');

        $roleConductor = Role::firstOrCreate(['name' => 'conductor']);
        $roleConductor->givePermissionTo(['iniciar viajes', 'entregar viajes', 'cerrar viajes']);

        $roleJefe = Role::firstOrCreate(['name' => 'jefe']);
        $roleJefe->givePermissionTo(['ver reportes']);

        $roleCliente = Role::firstOrCreate(['name' => 'cliente']);
    }
}

 