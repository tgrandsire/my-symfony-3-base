<?php

namespace AppBundle\Model;

/**
 * NameableInterface
 */
interface NameableInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getName(): ?string;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name);
}
