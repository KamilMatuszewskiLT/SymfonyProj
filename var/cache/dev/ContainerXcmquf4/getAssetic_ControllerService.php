<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.controller' shared service.

include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Cache\\CacheInterface.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Cache\\FilesystemCache.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\assetic-bundle\\Controller\\AsseticController.php';

return $this->services['assetic.controller'] = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController(${($_ = isset($this->services['assetic.asset_manager']) ? $this->services['assetic.asset_manager'] : $this->load('getAssetic_AssetManagerService.php')) && false ?: '_'}, new \Assetic\Cache\FilesystemCache(($this->targetDirs[0].'/assetic/assets')), false, ${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->getProfilerService()) && false ?: '_'});
