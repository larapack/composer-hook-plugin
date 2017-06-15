<?php

namespace Larapack\ComposerHookPlugin;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class HookPlugin implements PluginInterface, EventSubscriberInterface
{
    protected $composer;
    protected $io;

    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    public static function getSubscribedEvents()
    {
        return array(
            'pre-autoload-dump' => 'onPreAutoloadDump',
        );
    }

    public function onPreAutoloadDump()
    {
        var_dump('test');die();
    }
}
