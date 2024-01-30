<?php

namespace App\Ldap;

use LdapRecord\Models\Model as LdapModel;
use LdapRecord\Models\Concerns\CanAuthenticate;
use Illuminate\Contracts\Auth\Authenticatable;


class User extends LdapModel implements Authenticatable 
{
    use CanAuthenticate;

    /**
     * The object classes of the LDAP model.
     *
     * @var array
     */
    public static array $objectClasses = ['top', 'person', 'organizationalperson', 'user'];

    /**
     * The distinguished name attribute of the LDAP model.
     *
     * @var string
     */
    protected static $dnAttribute = 'uid';
    protected string $guidKey = 'uuid';

    /**
     * The attribute that represents the user's common name.
     *
     * @var string
     */
    public $commonName = 'cn';

    /**
     * The attribute that represents the user's surname.
     *
     * @var string
     */
    public $surname = 'sn';

    /**
     * The attribute that represents the user's given name.
     *
     * @var string
     */
    public $givenName = 'givenname';

    /**
     * The attribute that represents the user's email address.
     *
     * @var string
     */
    public $email = 'mail';

    /**
     * The attribute that represents the user's username.
     *
     * @var string
     */
    public $username = 'uid';

    /**
     * Get the distinguished name attribute.
     *
     * @return string
     */
    public function getDnAttribute(): string
    {
        return $this->getAttribute($this->getDnAttributeName());
        
    }
}
