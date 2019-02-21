<?php

namespace AppBundle\Entity\Security;

use Doctrine\ORM\Mapping as ORM;
use Gesdinet\JWTRefreshTokenBundle\Entity\AbstractRefreshToken;

use AppBundle\Model\{IdentityInterface, IdentityEntity};

/**
 * This class override Gesdinet\JWTRefreshTokenBundle\Entity\RefreshToken to have another table name.
 *
 * @ORM\Table("security_jwt_refresh_token")
 * @ORM\Entity
 */
class JwtRefreshToken extends AbstractRefreshToken implements IdentityInterface
{
    use IdentityEntity;
}
