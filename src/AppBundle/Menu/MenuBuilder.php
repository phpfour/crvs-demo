<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class MenuBuilder
{
    /** @var FactoryInterface */
    private $factory;

    /** @var AuthorizationCheckerInterface */
    private $authorizationChecker;

    public function __construct(FactoryInterface $factory, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->factory              = $factory;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root')
            ->setChildrenAttribute('class', 'sidebar-menu');

        $menu->addChild('Dashboard', ['route' => 'dashboard'])
            ->setAttribute('icon', 'fa fa-dashboard');

        if (ORGANIZATION == 'DMC') {

            $menu->addChild('Patients', ['route' => 'patient_index'])
                ->setAttribute('icon', 'fa fa-user');

        } elseif (ORGANIZATION == 'LGD') {

            $menu->addChild('Birth Registrations', ['route' => 'birth_index'])
                ->setAttribute('icon', 'fa fa-user');

            $menu->addChild('Birth Events', ['route' => 'birth_events'])
                ->setAttribute('icon', 'fa fa-users');

        } else {

            $menu->addChild('Students', ['route' => 'app_students'])
                ->setAttribute('icon', 'fa fa-user');

        }

        return $menu;
    }
}