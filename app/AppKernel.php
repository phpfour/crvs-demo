<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(

            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),

            new FOS\UserBundle\FOSUserBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),

            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
//            new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
//            new Leezy\PheanstalkBundle\LeezyPheanstalkBundle(),
//            new Xiidea\EasyAuditBundle\XiideaEasyAuditBundle(),

            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
//            new Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
//            new EightPoints\Bundle\GuzzleBundle\GuzzleBundle(),

            new JMS\SerializerBundle\JMSSerializerBundle($this),
            new Sylius\Bundle\ResourceBundle\SyliusResourceBundle(),
            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
//            new Bazinga\Bundle\HateoasBundle\BazingaHateoasBundle(),
//            new \APY\DataGridBundle\APYDataGridBundle(),

//            new Sg\DatatablesBundle\SgDatatablesBundle(),
//            new JavierEguiluz\Bundle\EasyAdminBundle\EasyAdminBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
//            new KPhoen\DoctrineStateMachineBundle\KPhoenDoctrineStateMachineBundle(),
//            new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),

            new AppBundle\AppBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
