<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'backup_manager.command.backup' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\symfony\\Command\\BackupCommand.php';

$this->services['backup_manager.command.backup'] = $instance = new \BM\BackupManagerBundle\Command\BackupCommand(${($_ = isset($this->services['backup_manager']) ? $this->services['backup_manager'] : $this->load('getBackupManagerService.php')) && false ?: '_'}, '');

$instance->setName('backup-manager:backup');

return $instance;