<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/base.php');

  Flight::route('GET /', function() {
    echo "<h1>PokeDex</h1>";
    echo 'Prueba con <a href="http://localhost/pokemon/Gastly">http://localhost/pokemon/Gastly</a> ';
    echo 'o con <a href="http://localhost/id/55">http://localhost/id/55</a>.';
  });

  Flight::route('/id/@id:[0-9]{1,3}', function($id) {
    $twig = new Twig();
    $pokedex = new Pokedex();
    $pokemon = $pokedex->getPokemonById($id);

    if (!$pokemon)
      return TRUE;
    
    $twig->addVar('name', $pokemon->getName());
    $twig->addVar('image', $pokemon->getImageURL());
    $twig->addVar('description', $pokemon->getDescription());
    $twig->display('pokemon.html.twig');
  });

  Flight::route('/pokemon/@name:[A-Za-z]+', function($name) {
    $twig = new Twig();    
    $pokedex = new Pokedex();
    $pokemon = $pokedex->getPokemonByName($name);

    if (!$pokemon)
      return TRUE;

    $twig->addVar('name', $pokemon->getName());
    $twig->addVar('image', $pokemon->getImageURL());
    $twig->addVar('description', $pokemon->getDescription());
    $twig->display('pokemon.html.twig');
  });
  
  Flight::start();

?>