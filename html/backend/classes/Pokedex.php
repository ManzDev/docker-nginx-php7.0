<?php

  class Pokedex {
    const JSONFILE = Path::JSON . '/pokemon.json';
    const MIN = 1;
    const MAX = 151;
    private $database;

    public function __construct() {
      $content = file_get_contents(self::JSONFILE);
      $this->database = json_decode($content);
    }

    public function getPokemonById($pokemonId) {
      $pokemonId = (int)$pokemonId;

      if (($pokemonId > self::MIN) && ($pokemonId < self::MAX)) {
        $pokemon = $this->database[$pokemonId - 1];
        return new Pokemon($pokemon);
      }
      return NULL;
    }

    public function getPokemonByName($name) {
      $name = ucfirst($name);

      foreach ($this->database as $pokemon)
        if ($pokemon->name == $name)
          return new Pokemon($pokemon);
      
      return NULL;
    }
  }

?>