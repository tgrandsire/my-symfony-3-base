<?php
namespace AppBundle\Model;

/**
 * Identity interface
 */
interface IdentityInterface
{
	/**
	 * Gets its id
	 *
	 * @return int
	 */
	public function getId(): ?int;
}

