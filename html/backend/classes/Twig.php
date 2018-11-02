<?php

  class Twig {
    private $twig;
    private $data = [];

    public function __construct() {
      $loader = new Twig_Loader_Filesystem(Path::TEMPLATES);
      $this->twig = new Twig_Environment($loader);
    }

    public function addVar($name, $data) {
      $this->data[$name] = $data;
    }

    // Return content
    public function render($template) {
      return $this->twig->render($template, $this->data);
    }

    // Show content
    public function display($template) {
      return $this->twig->display($template, $this->data);
    }
  }

?>