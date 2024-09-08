<?php

namespace App\Attributes;

use Attribute;

#[Attribute]
class HasPermissions
{
    public array $permissions;

    public function __construct(string ...$permissions)
    {
        $this->permissions = $permissions;
    }
}
