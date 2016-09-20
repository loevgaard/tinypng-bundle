<?php
namespace Tinypng\Bundle\EventListener;

use Symfony\Component\Console\Event\ConsoleCommandEvent;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class CommandListener implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function onConsoleCommand(ConsoleCommandEvent $event)
    {
        \Tinify\setKey($this->container->getParameter('tinypng.api_key'));
    }
}