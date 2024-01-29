<?php

namespace App\Ldap\Scopes;

use LdapRecord\Models\Model;
use LdapRecord\Models\Scope;
use LdapRecord\Query\Model\Builder;

class Accounting implements Scope
{
    /**
     * Apply the scope to the given query.
     */
    public function apply(Builder $query, Model $model): void
    {
        // ...
    }
}
