<?php

namespace MCPEPIG\FlameBows;

use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityShootBowEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
  public function onEnable(){
    $this->getLogger()->info("§aFlameBows by MCPEPIG loaded.");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onEntityUseBow(EntityShootBowEvent $event){
    $entity = $event->getEntity();
    if($entity instanceof Player){
      $name = $entity->getName();
      if($entity->hasPermission("flamebows.use")){
        $event->getProjectile()->setOnFire(100000000);
      }
    }
  }
}
