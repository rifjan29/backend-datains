<?php

namespace App\Models;

class Role extends \Spatie\Permission\Models\Role
{
    public  $guard_name = 'web';
}
