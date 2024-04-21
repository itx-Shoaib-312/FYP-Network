<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        if (config('app.debug')) {
            Schema::disableForeignKeyConstraints();
            DB::table('roles')->truncate();
            DB::table('role_has_permissions')->truncate();
            DB::table('permissions')->truncate();
            DB::table('model_has_permissions')->truncate();
            Schema::enableForeignKeyConstraints();
        }
        $permissionsByRole = [
            'admin' => [
                ['name' => 'view-dashboard'],
                ['name' => 'view-designation'],
                ['name' => 'add-designation'],
                ['name' => 'update-designation'],
                ['name' => 'delete-designation'],
                ['name' => 'view-staff'],
                ['name' => 'add-staff'],
                ['name' => 'update-staff'],
                ['name' => 'delete-staff'],
                ['name' => 'view-supervisor'],

                ['name' => 'add-supervisor'],
                ['name' => 'delete-supervisor'],
                ['name' => 'update-supervisor'],
                ['name' => 'view-supervisor'],
                ['name' => 'view-title'],
                ['name' => 'add-title'],
                ['name' => 'view-peer'],
                ['name' => 'add-peer'],
                ['name' => 'delete-peer'],
                ['name' => 'update-peer'],
                ['name' => 'add-worksubmission'],
                ['name' => 'delete-worksubmission'],
                ['name' => 'view-worksubmission'],
                ['name' => 'add-userdata'],
                ['name' => 'update-userdata'],
                ['name' => 'delete-userdata'],
                ['name' => 'view-finalized'],
                ['name' => 'view-announcement'],

                ['name' => 'add-announcement'],
                ['name' => 'update-announcement'],
                ['name' => 'delete-announcement'],
                ['name' => 'add-livestate'],
                ['name' => 'view-livestate'],

                ['name' => 'update-livestate'],
                ['name' => 'delete-livestate'],
                ['name' => 'view-analytics'],
                ['name' => 'add-analytics'],
                ['name' => 'delete-analytics'],
                ['name' => 'update-analytics'],
                ['name' => 'view-usersupport'],
                ['name' => 'add-usersupport'],




            ],
            'supervisor' => [
                ['name' => 'view-supervisor'],
                ['name' => 'add-supervisor'],
                ['name' => 'delete-supervisor'],
                ['name' => 'update-supervisor'],
                ['name' => 'view-finalized'],

                ['name' => 'add-livestate'],
                ['name' => 'update-livestate'],
                ['name' => 'delete-livestate'],
                ['name' => 'view-analytics'],
                ['name' => 'add-analytics'],
                ['name' => 'delete-analytics'],
                ['name' => 'update-analytics'],
                ['name' => 'view-usersupport'],
                ['name' => 'add-usersupport'],


            ],
            'student' => [
                ['name' => 'view-dashboard'],
                ['name' => 'view-title'],
                ['name' => 'add-title'],
                ['name' => 'view-finalized'],
                ['name' => 'add-worksubmission'],
                ['name' => 'delete-worksubmission'],
                ['name' => 'view-worksubmission'],
                ['name' => 'view-announcement'],

                ['name' => 'add-announcement'],
                ['name' => 'update-announcement'],
                ['name' => 'delete-announcement'],
                ['name' => 'add-livestate'],
                ['name' => 'view-livestate'],

                ['name' => 'update-livestate'],
                ['name' => 'delete-livestate'],
                ['name' => 'view-analytics'],
                ['name' => 'add-analytics'],
                ['name' => 'delete-analytics'],
                ['name' => 'update-analytics'],
                ['name' => 'view-usersupport'],
                ['name' => 'add-usersupport'],



            ],
            'coordinator' => [
                ['name' => 'view-dashboard'],

                ['name' => 'view-supervisor'],
                ['name' => 'add-supervisor'],
                ['name' => 'delete-supervisor'],
                ['name' => 'update-supervisor'],
                ['name' => 'view-finalized'],
                ['name' => 'add-worksubmission'],
                ['name' => 'delete-worksubmission'],
                ['name' => 'view-worksubmission'],
                ['name' => 'view-announcement'],

                ['name' => 'add-announcement'],
                ['name' => 'update-announcement'],
                ['name' => 'delete-announcement'],
                ['name' => 'view-analytics'],
                ['name' => 'add-analytics'],
                ['name' => 'delete-analytics'],
                ['name' => 'update-analytics'],
                ['name' => 'add-livestate'],
                ['name' => 'view-livestate'],

                ['name' => 'update-livestate'],
                ['name' => 'delete-livestate'],
                ['name' => 'view-analytics'],
                ['name' => 'add-analytics'],
                ['name' => 'delete-analytics'],
                ['name' => 'update-analytics'],
                ['name' => 'view-usersupport'],
                ['name' => 'add-usersupport'],


            ],


        ];

        $permissionIdsByRoles = [];

        foreach ($permissionsByRole as $role => $permissions) {
            $permissionIdsByRoles[] = [
                "role" => str($role)->lower(),
                "guard" => 'web',
                "permissions" => collect($permissions)
                    ->map(function ($permission) {
                        $permission['name'] = str($permission['name'])->lower();
                        return (Permission::updateOrCreate($permission, $permission))->id;
                    })
                    ->toArray(),
            ];
        }

        foreach ($permissionIdsByRoles as $permissionIdsByRole) {
            $role = Role::findOrCreate($permissionIdsByRole['role'], $permissionIdsByRole['guard']);

            DB::table('role_has_permissions')
                ->insert(
                    collect($permissionIdsByRole['permissions'])->map(function ($id) use ($role) {
                        return [
                            'role_id' => $role->id,
                            'permission_id' => $id
                        ];
                    })->toArray()
                );
        }
    }
}
