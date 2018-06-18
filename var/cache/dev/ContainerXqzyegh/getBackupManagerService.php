<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'backup_manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Config\\Config.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Filesystems\\Filesystem.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Filesystems\\LocalFilesystem.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Filesystems\\FilesystemProvider.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\symfony\\Factory\\ConfigFactory.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Databases\\Database.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Databases\\MysqlDatabase.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Databases\\PostgresqlDatabase.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Databases\\DatabaseProvider.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Compressors\\Compressor.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Compressors\\GzipCompressor.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Compressors\\NullCompressor.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Compressors\\CompressorProvider.php';
include_once $this->targetDirs[3].'\\vendor\\backup-manager\\backup-manager\\src\\Manager.php';

$a = new \BackupManager\Filesystems\FilesystemProvider(new \BackupManager\Config\Config(array('local' => array('type' => 'Local', 'root' => 'C:/Resources/DBBackup/'))));
$a->add(new \BackupManager\Filesystems\LocalFilesystem());

$b = new \BackupManager\Databases\DatabaseProvider(\BM\BackupManagerBundle\Factory\ConfigFactory::createConfig(array('development' => array('type' => 'mysql', 'host' => 'localhost', 'port' => 3306, 'user' => 'root', 'pass' => NULL, 'database' => 'mydbexample', 'ignoreTables' => array(0 => 'foo', 1 => 'bar')))));
$b->add(new \BackupManager\Databases\MysqlDatabase());
$b->add(new \BackupManager\Databases\PostgresqlDatabase());

$c = new \BackupManager\Compressors\CompressorProvider();
$c->add(new \BackupManager\Compressors\GzipCompressor());
$c->add(new \BackupManager\Compressors\NullCompressor());

return $this->services['backup_manager'] = new \BackupManager\Manager($a, $b, $c);