<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'easyadmin.form.type.autocomplete' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\DataMapperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminAutocompleteType.php';

return $this->services['easyadmin.form.type.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType(${($_ = isset($this->services['easyadmin.config.manager']) ? $this->services['easyadmin.config.manager'] : $this->getEasyadmin_Config_ManagerService()) && false ?: '_'});
