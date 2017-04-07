<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permission;

class Permission extends Model
{
    public function roles()
    {
        $this->belongsToMany(\App\Role::class);
    }
    
    public function hasPermission(Permission $permission)
    {
        return $this->hasAnyRoles($permission->roles());
    }
    
    public function hasAnyRoles($roles)
    {
        if(is_array($roles) || is_object($roles))
        {
            foreach ($roles as $role)
            {
                return $this->roles->contains('name', $role->name);
            }
        }
        
        return $this->roles->contains('name', $roles);
    }
}
