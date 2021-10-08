<?php
namespace Drupal\recetas_core\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class InfoController extends ControllerBase
{

  public function info($node)
  {
    $build['first_recipe'] = [
      '#weight' => 100,
      '#theme' =>'recetas_core_vars',
      '#forums' =>t('hello'),
      '#parents' =>'mundo',
      '#tid' =>'blalballal',
    ];
    return $build;
  }

  public function title($node)
  {
    //$n = Node::load($node);
    return 'Hola > ' . $node->label();
  }
}
