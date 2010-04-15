<?php

require_once realpath(dirname(__FILE__).'/../..').'/diem/dmCorePlugin/lib/core/dm.php';
dm::start();

class ProjectConfiguration extends dmProjectConfiguration
{

  public function setup()
  {
    parent::setup();
    
    $this->enablePlugins(array(
      'dmWidgetTwitterPlugin',
      'dmContactPlugin'
    ));

    $this->setWebDir(sfConfig::get('sf_root_dir').'/web');
  }
  
}