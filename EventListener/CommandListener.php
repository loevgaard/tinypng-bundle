<?php
namespace Tinypng\Bundle\EventListener;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class CommandListener implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function onConsoleCommand(GetResponseEvent $event)
    {
        \Tinify\setKey($this->container->getParameter('tinypng.api_key'));
    }
}