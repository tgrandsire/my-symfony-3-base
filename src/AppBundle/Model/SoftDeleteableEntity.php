<?php

namespace AppBundle\Model;

use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity as GedmoSoftDeleteableEntity;

/**
 * The Gedmo SoftDeleteableEntity with additional functions
 */
Trait SoftDeleteableEntity
{
    use GedmoSoftDeleteableEntity;

    public function recover(): self
    {
        $this->deletedAt = null;

        return $this;
    }
}
