<?php

namespace Drupal\dino_roar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\dino_roar\Jurassic\RoarGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class RoarController extends ControllerBase
{
  private $roarGenerator;
  public function __construct(RoarGenerator $roarGenerator)
  {
    $this->roarGenerator = $roarGenerator;

  }

  public function roar($count) {
   // $roar = "R" . str_repeat('o', $count) . "ar!";
    //$roarGenerator = new RoarGenerator();
    $roar = $this->roarGenerator->getRoar($count);
    return new Response($roar);
  }

  public static function create(ContainerInterface $container) {

    $roarGenerator = $container->get('dino_roar.roar_generator');
    return new static($roarGenerator);
  }
}