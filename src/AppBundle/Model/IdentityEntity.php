<?php
namespace AppBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Identity Entity
 */
Trait IdentityEntity
{
	/**
	 * Id
	 *
	 * @var integer
	 *
	 * @ORM\Id
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 *
	 * @Groups({"sort", "variety"})
	 */
	protected $id;

	/**
	 * Gets its id
	 *
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}
}
