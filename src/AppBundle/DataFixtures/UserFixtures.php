<?php

namespace AppBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

use AppBundle\Entity\Security\User;

class UserFixtures extends Fixture implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    const ADMIN       = 'user-admin';
    const SUPER_ADMIN = 'user-super-admin';

    public function load(ObjectManager $manager)
    {
        // Get our userManager
        $userManager = $this->container->get('fos_user.user_manager');

        // Create our admin user and set details
        $user = $userManager->createUser();
        $user->setUsername('teddy');
        $user->setFullname('Teddy Grandsire');
        $user->setEmail('teddy@grandsire.org');
        $user->setPlainPassword('123admin');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_SUPER_ADMIN', 'ROLE_ADMIN'));
        // Update the user
        $userManager->updateUser($user, true);
        $this->addReference(self::SUPER_ADMIN, $user);

        // Create our gamer user and set details
        $user = $userManager->createUser();
        $user->setUsername('pdupont');
        $user->setFullname('Patrick Dupont');
        $user->setEmail('pdupont@grandsire.org');
        $user->setPlainPassword('123user');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_ADMIN'));
        // Update the user
        $userManager->updateUser($user, true);
        $this->addReference(self::ADMIN, $user);
    }
}
