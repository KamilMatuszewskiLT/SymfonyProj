<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'backup_manager.command.restore' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\symfony\\Command\\RestoreCommand.php';

$this->services['backup_manager.command.restore'] = $instance = new \BM\BackupManagerBundle\Command\RestoreCommand(${($_ = isset($this->services['backup_manager']) ? $this->services['backup_manager'] : $this->load('getBackupManagerService.php')) && false ?: '_'});

$instance->setName('backup-manager:restore');

return $instance;