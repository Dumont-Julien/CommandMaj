<?php

namespace NewTheBuilder\CommandMaj;

use pocketmine\event\Listener;
use pocketmine\event\server\CommandEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    protected function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function executeCommand(CommandEvent $event) {

        $cmd = $event->getCommand();
        $commande = explode(" ", $cmd);
        $commande[0] = strtolower($commande[0]);
        $cmd = implode(" ", $commande);

        $event->setCommand($cmd);
    }
}