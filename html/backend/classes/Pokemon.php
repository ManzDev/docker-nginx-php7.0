<?php

  class Pokemon {
    private $data;

    public function __construct($data) {
      $this->data = $data;
    }

    public function getName() {
      return $this->data->name;
    }

    public function getImageURL() {
      return "https://img.pokemondb.net/artwork/" . strtolower($this->data->name) . ".jpg";
    }

    public function getId() {
      return $this->data->pkdx_id;
    }

    public function getDescription() {
      return $this->data->description;
    }

  }

?>