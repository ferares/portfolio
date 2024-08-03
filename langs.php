<?php

class Langs {
  private $current_lang = 'es';
  private $translations = [];
  private $langs = [
    'es' => [
      'code' => 'es',
      'name' => 'Español',
      'icon' => '',
    ],
    'en' => [
      'code' => 'en',
      'name' => 'English',
      'icon' => '',
    ],
  ];

  public function __construct() {
    // TODO: Detect current language
    $this->current_lang = 'es';
    $translations_json = file_get_contents("./translations/$this->current_lang.json");
    if ($translations_json) {
      $translations = json_decode($translations_json, true);
      if ($translations) {
        $this->translations = $translations;
      }
    }
  }

  public function get_current_lang() {
    return $this->langs[$this->current_lang];
  }

  public function __($key) {
    return isset($this->translations[$key]) ? $this->translations[$key] : $key;
  }
}