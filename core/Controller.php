<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{

  public function view(string $path, $datas = []){


     $loader = new FilesystemLoader('../ressources/views');
    $twig = new Environment
    ($loader, [
      'cache' => false,
    ]);

    echo $twig->render($path.'.twig', $datas);
  }

}